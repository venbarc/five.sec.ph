<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(){
        return view('index')
        ->with('title', 'Home | Five Sec');
    }

    public function login(){
        return view('users.login')
        ->with('title', 'Login | Five Sec');
    }

    public function register(){
        return view('users.register')
        ->with('title', 'Register | Five Sec');
    }

    public function show(){
        return view('home.categories');
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function create_user(Request $request){
        $validated = $request->validate([
            'email' => ['required', 'email', Rule::unique('users','email')],
            'full_name' => ['required', 'min:3'],
            'contact' => ['required', 'numeric', 'digits:10'],
            'address' => ['required'],
            'password' => ['required', 'min:8', 'confirmed'],
            'password_confirmation' => ['required'],
        ]);
        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);
        return back()->with('success_msg','Registration Successful');
    }

    public function login_user(Request $request){
        $validated = $request->validate([
            "email" => ['required', 'email'],
            "password" => 'required'
        ]);
        if(auth()->attempt($validated))
        {
            session()->flash('success_msg','Welcome to Five Sec');
            $request->session()->regenerate();
            return view('users.dashboard')
            ->with('title','Dashboard | Five Sec');
        }
        else{
            return back()->withErrors(['email' => 'Wrong Credentials'])->onlyInput('email');
        }
    }
}
