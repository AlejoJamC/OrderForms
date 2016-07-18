<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\OrderState;
use DB;
use Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

class OrdersController extends Controller
{
    // TODO: Allow basic user delete his own orders

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $order_header = DB::table('users')
            ->join('cities', 'users.city_id', '=', 'cities.id')
            ->join('states', 'users.state_id', '=', 'states.id')
            ->select('users.id AS user_id', 'users.business_name', 'users.identification', 'users.contact',
                'users.email', 'users.address', 'users.role_id', 'cities.name AS city', 'states.name AS state')
            ->where('users.id', Auth::user()->id)
            ->get();
        return view('order.new')->with('order_header', $order_header);
    }

    public function redirectTo(){
        return redirect('dash/orders/new');
    }

    public function details($order_id){
        // Get order header
        // Order states list
        $order_states = OrderState::where('status', true)->pluck('name','id');
        // All Orders
        $order_by_user = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->join('cities', 'users.city_id', '=', 'cities.id')
            ->join('states', 'users.state_id', '=', 'states.id')
            ->join('order_states', 'orders.order_state_id', '=', 'order_states.id')
            ->select('orders.id', 'orders.ship_date', 'users.business_name', 'users.identification', 'users.contact',
                'users.email', 'users.address', 'users.role_id', 'cities.name AS city', 'states.name AS state', 'orders.way_to_pay',
                'order_states.name AS order_state', 'orders.verified', 'orders.canceled', 'orders.created_at',
                'orders.order_state_id')
            ->where('orders.status', true)
            ->where('orders.id', $order_id)
            ->get();
        // The order detail will be loaded by ajax calling the method ajaxOrderDetail();
        return view('order.detail')->with('order_header', $order_by_user)->with('order_states', $order_states);
    }

    public function ajaxOrderDetail(){
        // Populate order detail table
        // Order
        $order_id = Input::get('order_id');
        $order_detail =DB::table('order_details')
            ->join('products', 'order_details.product_id', '=', 'products.id')
            ->select('order_details.id', 'order_details.order_id', 'products.title', 'products.presentation',
            'products.brand','products.price', 'order_details.quantity')
            ->where('order_details.order_id', $order_id)
            ->get();
        return $order_detail;
    }

    public function postOrder(Request $request){
        // Requiered entities
        $order = new Order;

        $header_msg = '';
        $detail_msg = '';

        // Order header
        $order->user_id = Auth::user()->id;
        $order->order_state_id = 1;
        $order->way_to_pay = $request->order_way_to_pay;

        if($order->save()){
            $new_order_id = $order->id;
            $header_msg = 'true';
            // Try to insert order detail
            // TODO: fix this way to store detail
            // TODO: use mysql transactions
            for($i=1; $i <= $request->order_rows; $i++) {
                // Requiered entities
                $order_detail = new OrderDetail;
                // Order detail
                $order_detail->order_id = $new_order_id;
                $order_detail->product_id = $request->{'order_detail_product_' . $i};
                $order_detail->quantity = $request->{'order_detail_product_quantity_' . $i};

                $order_detail->save();
            }
            $detail_msg = 'true';
        }
        else{
            $header_msg = 'Error insertando la orden';
            $detail_msg = 'Error insertando el detalle de la orden';
        }


        return redirect('dash/orders/new')->with('header_msg', $header_msg)->with('detail_msg', $detail_msg);
    }

}
