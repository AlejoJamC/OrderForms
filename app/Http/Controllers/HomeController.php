<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('history.me');
    }

    public function gotoLogin()
    {
        return view('auth.login');
    }

    public function gotoRegister()
    {
        return redirect('/login');
        //return view('auth.register');
    }
}
