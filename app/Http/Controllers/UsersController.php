<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    public function index(){
        return view('user.list');
    }

    public function register(){
        return view('user.new');
    }

    public function profile(){
        return view('user.profile');
    }

    public function reset(){
        return view('user.reset');
    }

    public function redirectTo(){
        return redirect('dash/users');
    }
}
