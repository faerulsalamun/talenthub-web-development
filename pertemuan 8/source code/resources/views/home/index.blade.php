@extends('layout.app')

@section('title','Home')

@section('content')
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 gy-3">
    @foreach($galleries as $gallery)
        <div class="col">
            <div class="card shadow-sm">
                <img class="card-img-top" widht="100%" height="250" src="{{$gallery->image}}">

                <div class="card-body">
                    <p class="card-text">{{$gallery->description}}</p>
                    <p class="card-text text-end">{{$gallery->user->name}} - {{$gallery->created_at}}
                </div>
            </div>    
        </div>
    @endforeach
</div>

@endsection