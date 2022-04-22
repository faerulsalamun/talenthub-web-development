@extends('layout.app')

@section('title','Edit Gallery')

@section('content')
<div class="row gy-3">
    <div class="col">
        <div class="card shadow-sm p-4">
            <form action="{{ route('processEditGallery') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <h1 class="mb-3 text-center">Edit Gallery</h1>
                <input type="hidden" id="id" name="id" value="{{$gallery->id}}">

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="name" id="name" name="name" value="{{ $gallery->name }}" required>
                    <label for="floatingInput">Name</label>
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="description" id="description" name="description" style="height:100px">{{$gallery->description}}</textarea>
                    <label for="floatingTextarea">Description</label>    
                </div>

                <div class="mb-3">
                    <input class="form-control" type="file" id="file" name="file">
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection