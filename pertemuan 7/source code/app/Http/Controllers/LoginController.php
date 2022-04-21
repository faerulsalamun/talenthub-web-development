<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function processLogin(Request $request){
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if(Auth::Attempt($data)){
            return redirect('/');
        }else{
            Session::flash('error','Email atau Password yang dimasukkan Salah');
            return redirect('/login');
        }
    }

    public function processLogout(){
        Auth::logout();
        return redirect('/');
    }
}
