<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\State;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    public function index(){
        return view('user.list');
    }

    public function register(){
        // Populate Select controls
        // States
        $states = State::where('status', true)->orderBy('name')->pluck('name','id');
        // Cities
        // Roles
        $roles = Role::where('status', true)->pluck('name','id');

        return view('user.new')->with('states', $states)->with('roles', $roles);
    }
    
    public function postRegister(){
        
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
