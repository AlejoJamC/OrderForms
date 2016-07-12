<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    public function index(){
        return view('blank');
    }

    public function redirectTo(){
        return redirect('dash/users');
    }

    public function profile(){
        return view('user.profile');
    }
}
