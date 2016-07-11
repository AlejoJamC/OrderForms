<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HistoryController extends Controller
{
    public function index(){
        return view('history.me');
    }
    
    public function fullHistory(){
        return view('history.all');
    }
}
