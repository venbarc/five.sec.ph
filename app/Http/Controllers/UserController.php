<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        session()->flash('success_msg','Dear friend welcome to Five Sec');
        return view('/index')->with('title', 'Home | Five Sec');
    }
}
