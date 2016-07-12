<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('history.me');
    }
    
    public function listAll(){
        return view('history.all');
    }

    public function redirectTo(){
        return redirect('dash/history/me');
    }
}
