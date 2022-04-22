@extends('layout.app')

@section('title','Login')

@push('styles')
<style>
    .form-sigin{
        width:100%;
        max-width:400px;
        padding:15px;
        margin:auto;
    }
</style>    
@endpush

@section('content')
<div class="form-sigin text-center">
    <form action="{{ route('processLogin') }}" method="POST">
        @csrf
        <h1 class="mb-3">Silakan Login</h1>

        @if(session('error'))
            <div class="alert alert-danger">
                <b>Oops!</b> {{ session('error') }}
            </div>
        @endif

        <div class="form-floating mb-3">
            <input type="email" class="form-control" placeholder="nama@email.com" id="email" name="email" required>
            <label for="floatingInput">Alamat Email</label>
        </div>

        <div class="form-floating mb-3">
            <input type="password" class="form-control" placeholder="password" id="password" name="password" required>
            <label for="floatingPassword">Password</label>
        </div>

        <p>Belum punya account ? Silakan <a href="{{url('/register')}}">Register disini</a></p>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign In</button>    
    </form>
</div>
@endsection