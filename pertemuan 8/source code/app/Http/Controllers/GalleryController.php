<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Auth;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index(){
        $galleries = Gallery::with('user')->where('user_id',Auth::user()->id)->get();

        return view('gallery.index',["galleries" => $galleries]);
    }

    public function add(){
        return view('gallery.add');
    }

    public function processAdd(Request $request){
        $image = Storage::disk('local')->put('public/images',$request->file('file'));
        $image = str_replace('public','storage',$image);

        $gallery = new Gallery();
        $gallery->name = $request->input('name');
        $gallery->description = $request->input('description');
        $gallery->image = $image;
        $gallery->user_id = Auth::user()->id;
        $gallery->save();

        return redirect('/gallery');
    }

    public function edit($id){
        $gallery = Gallery::find($id);

        return view('gallery.edit',['gallery' => $gallery]);
    }

    public function processEdit(Request $request){
        $gallery = Gallery::find($request->input('id'));

        $gallery->name = $request->input('name');
        $gallery->description = $request->input('description');

        if($request->hasFile('file')){
            $image = Storage::disk('local')->put('public/images',$request->file('file'));
            $image = str_replace('public','storage',$image);

            $gallery->image = $image;
        }

        $gallery->save();

        return redirect('/gallery');
    }

    public function delete($id){
        $gallery = Gallery::find($id);
        $gallery->delete();

        return redirect('/gallery');
    }
}
