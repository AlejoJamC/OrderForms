<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\Models\OrderState;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('history.me');
    }

    public function redirectToLogin(){
        $url = '';
        $session_value = session('username');
        if($session_value == 'guest'){
            $url = 'login';
        }else{
            $url = 'dash';
        }
        return redirect($url);
    }

    public function listAll(){
        if(Auth::user()->role_id == 1){
            return redirect('dash/history/me');
        }else{
            // Populate select controls
            // Order states
            $order_states = OrderState::where('status', true)->pluck('name','id');
            return view('history.all')->with('order_states', $order_states);
        }
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
        $url = '';
        if(Auth::user()->role_id == 3){
            $url = 'dash/history/all';
        }else{
            $url = 'dash/history/me';
        }
        return redirect($url);
    }
}
