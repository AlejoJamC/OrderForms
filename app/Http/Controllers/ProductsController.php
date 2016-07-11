<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductsController extends Controller
{
    public function index(){
        return view('blank');
    }

    public function redirectTo(){
        return redirect('dash/products');
    }
}
