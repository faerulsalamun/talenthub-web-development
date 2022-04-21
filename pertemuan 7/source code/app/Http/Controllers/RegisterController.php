<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function processRegister(Request $request){
        // Check data apakah user sudah terdaftar atau belum
        $dataUser = User::where('email',$request->input('email'))->first();

        if($dataUser){
            Session::flash('error','Email sudah terdaftar');
            return redirect('/register');
        }else{
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->save();

            Session::flash('success','Berhasil melakukan registrasi');

            return redirect('/register');
        }
    }
}
