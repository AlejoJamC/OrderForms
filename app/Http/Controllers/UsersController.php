<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Role;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('user.list');
    }

    public function register(){
        // Populate Select controls
        // States
        $states = State::where('status', true)->orderBy('name')->pluck('name','id');
        // Roles
        $roles = Role::where('status', true)->pluck('name','id');

        return view('user.new')->with('states', $states)->with('roles', $roles);
    }

    public function ajaxCity(){
        // Populate Select controls
        // Cities
        $state_id = Input::get('state_id');
        $city = City::where('state_id','=',$state_id)->where('status', true)->get();
        return $city;
    }
    
    public function postRegister(Request $request){
        // Required entity
        $user = new User;

        // User fields
        $user->business_name = $request->business_name;
        $user->identification = $request->identification;
        $user->contact = $request->contact;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->city_id = $request->city_id;
        $user->state_id = $request->state_id;
        $user->picture = 'img/profile/user.png';
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role;

        if($user->save()){
            $header_msg = 'true';
        }
        else{
            $header_msg = 'Error creando el usuario';
        }
        return redirect()->back()->withErrors('header_msg', $header_msg);
    }

    public function profile($user_id){
        $user_data = User::where('id', $user_id)->get();
        $states = State::where('status', true)->orderBy('name')->pluck('name','id');
        $cities = City::where('status', true)->orderBy('name')->pluck('name','id');
        return view('user.profile')->with('user_data', $user_data)->with('states', $states)->with('cities', $cities);
    }

    public function redirectTo(){
        return redirect('dash/users');
    }

    public function ajaxList(){
        $users =  User::where('status', true)->orderBy('business_name')->get();
        return $users;
    }
}
