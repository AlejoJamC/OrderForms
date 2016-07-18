<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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

    public function details($id){
        $product_by_id = Product::where('id',$id)->get();
        return view('product.detail')->with('product_by_id', $product_by_id);
    }

    public function newProduct(){
        return view('product.new');
    }

    public function ajaxProductById(){
        $product_id = Input::get('product');
        $product = Product::where('id', $product_id)->get();
        return $product;
    }

    public function postProduct(Request $request){
        // Requiered entities
        $product = new Product;

        $header_msg = '';

        // product content
        $product->title = $request->title;
        $product->presentation = $request->presentation;
        $product->brand = $request->brand;
        $product->price = $request->price;
        $product->price_with_tax = $request->price_with_tax;
        $product->quantity = $request->quantity;

        if($product->save()){
            $header_msg = 'true';
        }
        else{
            $header_msg = 'Error insertando la orden';
        }
        return redirect()->back()->withErrors('header_msg', $header_msg);
    }

    }

}
