<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function post_login(Request $request){
        // dd($request->all());
        try { 
            $validated = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->intended('/')->with('success', 'bienvenido');
            }else{
                return back()->withErrors('Email y/o Password incorrectos');
            }
            
        } catch (\Throwable $th) {
            return back()->withErrors('Email y/o Password incorrectos');
        }
    }
}
