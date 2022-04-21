<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') || Web Development Talent Hub</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    @stack('styles')
    <style>
        .bg-main {
            background-image:url('{{asset('/images/background.png')}}');
            background-repeat:no-repeat;
            background-size:cover;
        }
     </style>   
</head>
<body>

    <header>
        <div class="navbar navbar-dark bg-dark">
            <div class="container">
                <a href="/" class="navbar-brand">
                    <strong>Gallery</strong>
                </a>
                
                @if(Auth::user())
                    <div class="dropdown">
                        <button class="btn dropdown-toggle text-white" data-bs-toggle="dropdown">   
                            {{ Auth::user()->name }}             
                        </button>    
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('gallery') }}">Upload Gallery</a></li>
                            <li><a class="dropdown-item" href="{{ route('processLogout') }}">Logout</a></li>
                        </ul>   
                    </div>
                @else
                    <a class="text-white text-decoration-none" href="{{url('login')}}">Login</a>
                @endif
            </div>
        </div>
    </header>

    <main>
        <section class="py-5 text-center container-fluid bg-main">
            <div class="row py-5">
                <div class="col-md-12">
                    <h1 class="text-white">Gallery Web Development Talent Hub</h1>
                    <p class="lead text-white">Selamat datang di gallery web development Talent Hub 2022 Batch 1</p>
                </div>   
            </div>    
        </section>                

        <div class="py-5 bg-light">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </main>

    <footer class="py-5">
        <div class="container">
            <p class="mb-0">Halaman ini dibuat oleh team Web Development</p>
        </div>    
    </footer>
    
</body>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</html>