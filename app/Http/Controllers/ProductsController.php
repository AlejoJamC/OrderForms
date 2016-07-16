<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('product.list');
    }

    public function load(){
        return view('product.load');
    }

    public function redirectTo(){
        return redirect('dash/products');
    }

    public function ajaxList(){
        $products = Product::where('status', true)->orderBy('title')->get();
        return $products;
    }

    public function ajaxListLight(){
        $products = Product::where('status', true)->orderBy('title')->pluck('title','id');
        return $products;
    }

    public function details(){
        return view('product.detail');
    }

    public function newProduct(){
        return view('product.new');
    }

    public function ajaxProductById(){
        $product_id = Input::get('product');
        $product = Product::where('id', $product_id)->get();
        return $product;
    }

}
