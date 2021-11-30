<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function showLoginFrom(){
        return view('auth.login');
    }
    public function loginproccess(Request $request){
        $request->validate([
            'email'    => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }
        else{
            session()->flash('error','Email Or Password Does Not Match');
            return redirect()->back();
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
