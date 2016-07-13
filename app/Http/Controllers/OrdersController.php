<?php

namespace App\Http\Controllers;

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

    public function details($id){
        //$orders_by_user = DB::table();
        return view('order.detail');
    }
}
