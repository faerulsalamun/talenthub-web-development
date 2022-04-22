<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index(){
        $galleries = Gallery::with('user')->get();

        return view('home.index',["galleries"=>$galleries]);
    }
}
