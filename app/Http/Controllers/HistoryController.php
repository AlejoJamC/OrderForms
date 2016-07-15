<?php

namespace App\Http\Controllers;

use DB;
use App\Models\OrderState;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class HistoryController extends Controller
{
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */

    public function index(){
        return view('history.me');
    }

    public function redirectToLogin(){
        return redirect('login');
    }

    public function listAll(){
        // Populate select controls
        // Order states
        $order_states = OrderState::where('status', true)->pluck('name','id');


        return view('history.all')->with('order_states', $order_states);
    }

    public function listAllAjax(){
        // Populate datatable control
        // All Orders
        $orders = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->join('order_states', 'orders.order_state_id', '=', 'order_states.id')
            ->select('orders.id', 'users.business_name', 'orders.created_at',
                'order_states.name AS order_state_name', 'orders.order_state_id')
            ->where('orders.status', true)
            ->get();
        return $orders;
    }
    public function listMeAjax(){
        $user_id = Input::get('user_id');
        // Populate datatable control
        // All Orders by user
        $orders = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->join('order_states', 'orders.order_state_id', '=', 'order_states.id')
            ->select('orders.id', 'users.business_name', 'orders.created_at',
                'order_states.name AS order_state_name', 'orders.order_state_id')
            ->where('orders.status', true)
            ->where('orders.user_id', $user_id)
            ->get();
        return $orders;
    }

    public function redirectTo(){
        return redirect('dash/history/me');
    }
}
