@extends('layout.app')

@section('title','Register')

@push('styles')
<style>
    .form-signin {
        width:100%;
        max-width:400px;
        padding:15px;
        margin:auto;
    }
</style>    
@endpush

@section('content')
<div class="form-signin text-center">
    <form action="{{ route('processRegister') }}" method="POST">
        @csrf

        <h1 class="mb-3">Silakan Register</h1>

        @if(session('error'))
        <div class="alert alert-danger">
            <b>Oops!!</b>{{ session('error')}}
        </div>
        @endif 

        @if(session('success'))
        <div class="alert alert-success">
            <b>{{session('success')}}</b>
        </div>
        @endif    

        <div class="form-floating mb-3">
            <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
            <label for="floatingInput">Email</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="Nama" id="name" name="name" required>
            <label for="floatingInput">Nama</label>
        </div> 

        <div class="form-floating mb-3">
            <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
            <label for="floatingPassword">Password</label>
        </div> 

        <p>Sudah memiliki account ? Silakan <a href="{{ url('/login') }}">Login disini</p>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>

    </form>
</div>
@endsection