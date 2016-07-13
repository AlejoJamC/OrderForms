<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderState;
use Illuminate\Http\Request;

use App\Http\Requests;

class HistoryController extends Controller
{
    public function index(){
        return view('history.me');
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
        $orders = Order::where('status', true)->get();

        return $orders;
    }

    public function redirectTo(){
        return redirect('dash/history/me');
    }
}
