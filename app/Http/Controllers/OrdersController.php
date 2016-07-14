<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class OrdersController extends Controller
{
    public function index(){
        return view('order.new');
    }

    public function redirectTo(){
        return redirect('dash/orders/new');
    }

    public function details($order_id){
        // Get order header
        // All Orders
        $order_by_user = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->join('cities', 'users.city_id', '=', 'cities.id')
            ->join('states', 'users.state_id', '=', 'states.id')
            ->join('order_states', 'orders.order_state_id', '=', 'order_states.id')
            ->select('orders.id', 'orders.ship_date', 'users.business_name', 'users.identification', 'users.contact',
                'users.email', 'users.address', 'cities.name AS city', 'states.name AS state', 'orders.way_to_pay',
                'order_states.name AS order_state', 'orders.verified', 'orders.canceled', 'orders.created_at',
                'orders.order_state_id')
            ->where('orders.status', true)
            ->where('orders.id', $order_id)
            ->get();
        // The order detail will be loaded by ajax calling the method ajaxOrderDetail();
        return view('order.detail')->with('order_header', $order_by_user);
    }

    public function ajaxOrderDetail(){
        // Populate order detail table
        // Order
        $order_id = Input::get('order_id');
        $order_detail = OrderDetail::where('order_id','=',$order_id)->where('status', true)->get();
        return $order_detail;
    }
}
