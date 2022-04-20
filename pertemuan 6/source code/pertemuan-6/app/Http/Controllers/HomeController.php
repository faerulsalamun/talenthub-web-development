<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index(){
        $galleries = Gallery::all();

        return view('gallery',["galleries" => $galleries]);
    }

    public function add(){
        return view ('gallery-add');
    }

    public function processAdd(Request $request){
        $gallery = new Gallery();
        $gallery->name = $request->get('name');
        $gallery->description = $request->get('description');
        $gallery->url = $request->get('url');
        $gallery->save();

        return redirect('/');
    }

    public function edit($id){
        $gallery = Gallery::find($id);

        return view('gallery-edit',["gallery" => $gallery]);
    }

    public function processEdit(Request $request){
        $gallery = Gallery::where($request->get('id'));
        $gallery->name = $request->get('name');
        $gallery->description = $request->get('description');
        $gallery->url = $request->get('url');
        $gallery->save();

        return redirect('/');
    }

    public function processDelete($id){
        $gallery = Gallery::find($id);
        $gallery->delete();

        return redirect('/');
    }

}
