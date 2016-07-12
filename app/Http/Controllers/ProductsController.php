<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductsController extends Controller
{
    public function index(){
        return view('product.list');
    }

    public function redirectTo(){
        return redirect('dash/products');
    }

    public function load(){
        return view('product.load');
    }
}
