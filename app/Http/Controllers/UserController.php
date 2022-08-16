<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\MailController;

class UserController extends Controller
{
    public function register(){
        return view('register');
    }
    public function login(){
        return view('login');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }
    public function show(Request $request)
    {
        $value = $request->session()->get('key');
        echo $value;
    }
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);
        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email','password');
        
    }
    public function store(Request $request){
        $formFields = $request->validate(
            [
                'name'=>'required|min:3',
                'email'=>'required|email|unique:users',
                'password'=>'required|confirmed|min:6'
            ]
            );
            $password = Hash::make($formFields['password']);
            $formFields['password'] = $password;
        
        $user = User::create($formFields);
        Auth::login($user);
        app('App\Http\Controllers\MailController')->sendMail();
        return redirect('/')->with('message', 'User has been registered');
    }
}