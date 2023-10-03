<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CV TRI JAYA') }}</title>
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="loading" style="max-height: 100vh;max-width: 100vw; min-height: 100vh;min-width: 100vw;display: flex; justify-content: center; align-items: center;overflow:hidden">
        <lottie-player
            autoplay
            loop
            mode="normal"
            style="width: 10vw"
            src='{"nm":"profile around","ddd":0,"h":800,"w":800,"meta":{"g":"@lottiefiles/toolkit-js 0.26.1"},"layers":[{"ty":4,"nm":"Shape Layer 1","sr":1,"st":0,"op":308.000012545097,"ip":0,"hd":false,"ddd":0,"bm":0,"hasMask":false,"ao":0,"ks":{"a":{"a":0,"k":[-22,-10,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6},"sk":{"a":0,"k":0},"p":{"a":0,"k":[400,400,0],"ix":2},"r":{"a":1,"k":[{"o":{"x":0.167,"y":0.167},"i":{"x":0.833,"y":0.833},"s":[0],"t":60},{"s":[-245],"t":299.00001217852}],"ix":10},"sa":{"a":0,"k":0},"o":{"a":0,"k":100,"ix":11}},"ef":[],"shapes":[{"ty":"gr","bm":0,"hd":false,"mn":"ADBE Vector Group","nm":"Ellipse 1","ix":1,"cix":2,"np":3,"it":[{"ty":"el","bm":0,"hd":false,"mn":"ADBE Vector Shape - Ellipse","nm":"Ellipse Path 1","d":1,"p":{"a":0,"k":[0,0],"ix":3},"s":{"a":0,"k":[668,668],"ix":2}},{"ty":"gs","bm":0,"hd":false,"mn":"ADBE Vector Graphic - G-Stroke","nm":"Gradient Stroke 1","e":{"a":0,"k":[384,8],"ix":5},"g":{"p":9,"k":{"a":0,"k":[0,0.10196078431372549,0.5411764705882353,1,0.111,0.2627450980392157,0.1607843137254902,1,0.25,0.1843137254901961,0.24705882352941178,0.6549019607843137,0.375,0.5372549019607843,0,1,0.5,0.19215686274509805,0.33725490196078434,0.7803921568627451,0.621,0.07450980392156863,0,0.43529411764705883,0.75,0.5372549019607843,0,1,0.875,0.596078431372549,0.058823529411764705,0.8941176470588236,1,0.39215686274509803,0.047058823529411764,0.9607843137254902],"ix":8}},"t":1,"a":{"a":0,"k":0},"h":{"a":0,"k":0},"s":{"a":0,"k":[-388,12],"ix":4},"lc":2,"lj":1,"ml":4,"o":{"a":0,"k":100,"ix":9},"w":{"a":0,"k":24,"ix":10},"d":[{"nm":"dash","n":"d","v":{"a":0,"k":50,"ix":1}},{"nm":"offset","n":"o","v":{"a":0,"k":0,"ix":7}}]},{"ty":"tr","a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"sk":{"a":0,"k":0,"ix":4},"p":{"a":0,"k":[-22,-10],"ix":2},"r":{"a":0,"k":0,"ix":6},"sa":{"a":0,"k":0,"ix":5},"o":{"a":0,"k":100,"ix":7}}]},{"ty":"tm","bm":0,"hd":false,"mn":"ADBE Vector Filter - Trim","nm":"Trim Paths 1","ix":2,"e":{"a":1,"k":[{"o":{"x":0.167,"y":0.167},"i":{"x":0.833,"y":0.833},"s":[100],"t":0},{"o":{"x":0.167,"y":0.167},"i":{"x":0.833,"y":0.833},"s":[0],"t":20},{"o":{"x":0.167,"y":0.167},"i":{"x":0.833,"y":0.833},"s":[0],"t":40},{"s":[100],"t":60.0000024438501}],"ix":2},"o":{"a":1,"k":[{"o":{"x":0.167,"y":0.167},"i":{"x":0.833,"y":0.833},"s":[0],"t":0},{"o":{"x":0.167,"y":0.167},"i":{"x":0.833,"y":0.833},"s":[-250],"t":20},{"o":{"x":0.167,"y":0.167},"i":{"x":0.833,"y":0.833},"s":[-500],"t":40},{"s":[-1071],"t":60.0000024438501}],"ix":3},"s":{"a":1,"k":[{"o":{"x":0.167,"y":0.167},"i":{"x":0.833,"y":0.833},"s":[100],"t":20},{"o":{"x":0.167,"y":0.167},"i":{"x":0.833,"y":0.833},"s":[0],"t":40},{"s":[0],"t":60.0000024438501}],"ix":1},"m":1}],"ind":1}],"v":"4.10.1","fr":29.9700012207031,"op":300.00001221925,"ip":0,"assets":[]}'
            ></lottie-player>
    </div>
    <div id="app" style="display: none">
    <x-alert></x-alert>
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
        <div class="container">

            {{-- <div class="left-nav-container">
                <a class="row navbar-brand" href="{{ url('/') }}">
                    <img src="{{ url('./storage/gambar/logo-color.png') }}" alt="Logo" class="company-logo col p-0">    
                    <p class="nama-company-placeholder col m-0 ms-3">CV TRI JAYA</p>
                </a>
            </div>
            <i class="burger-icon bi bi-list" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-expanded="false"></i>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title nama-company-placeholder-offcanvas" id="offcanvasNavbarLabel">CV TRI JAYA</h5>
                    <button type="button" class="btn-close burger-item-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body navmenu-container">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 gap-4">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/product') }}">PRODUCT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">PROJECT</a>
                        </li>
                </div>
            </div> --}}

            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'CV TRI JAYA') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                @auth
                <ul class="navbar-nav me-auto col d-flex justify-content-center">
                @if(Auth::user()->role == 'ADMIN')
                    {{-- <li class="nav-item"><a class="text-decoration-none text-muted mx-3" href="{{ route('dashboard') }}">DASHBOARD</a></li>
                    <li class="nav-item"><a class="text-decoration-none text-muted mx-3" href="{{ route('jenis.index') }}">JENIS</a></li>
                    <li class="nav-item"><a class="text-decoration-none text-muted mx-3" href="{{ route('kaca.index') }}">KACA</a></li>
                    <li class="nav-item"><a class="text-decoration-none text-muted mx-3" href="{{ route('ukuran.index') }}">UKURAN</a></li> --}}
                @elseif (Auth::user()->role == 'USER')
                    <li class="nav-item"><a class="text-decoration-none text-muted mx-3" href="{{ route('dashboard') }}">DASHBOARD</a></li>
                    <li class="nav-item"><a class="text-decoration-none text-muted mx-3" href="">PESAN</a></li>
                    <li class="nav-item"><a class="text-decoration-none text-muted mx-3" href="">KACA</a></li>
                @endif
                @endauth

                @guest
                <a class="dropdown-item" href="/">
                    {{ __('Home') }}
                </a>
                <li class="nav-item"><a class="text-decoration-none text-muted mx-3" href="{{ url('/product') }}">PRODUCT</a></li>
                @endguest
                </ul>
                

                <ul class="navbar-nav ms-auto">
                    @guest
                        @if (!Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (!Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown ">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle d-flex justify-content-end align-items-center gap-2" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/">
                                    {{ __('Home') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
      </nav>
      @auth
        <main class="d-flex">
            <x-sidebar_admin />
            {{ $slot }}
        </main>
      @endauth
      @guest
        <main>
                {{ $slot }}
        </main>
      @endguest
    </div>
</body>

</html>

<style>
    .nav-container {

        height: 115px;
    }

    .left-nav-container {

        margin-left: 75px;
    }

    .company-logo {

        width: 45px;
        height: 45px;
    }

    .nama-company-placeholder {

        font-size: 2rem;
        font-family: 'Space Grotesk', sans-serif;
        color: #1e1e1e;
    }

    .navmenu-container {

        font-size: 1.25rem;
        font-weight: 500;
    }

    .navmenu {

        color: #1e1e1e
    }

    .navmenu:hover {

        font-weight: 700
    }

    .navmenu-container {

        margin-inline-end: 70px;
    }

    .burger-icon {

        visibility: hidden;
    }

    @media only screen and (max-width: 1170px) {

        .left-nav-container {

            margin-left: 50px;
        }

        .navmenu {

            font-size: 1.125rem;
        }

        .navmenu-container {

            margin-inline-end: 30px;
        }
    }

    @media only screen and (max-width: 767px) {

        .nav-container {

            height: 60px;
        }

        .left-nav-container {

            margin-left: 10px;
        }

        .company-logo {

            display: flex;
            width: 28px;
            height: 28px;
            margin-inline-start: 15px;
        }

        .nama-company-placeholder {

            display: none;
        }
        .nama-company-placeholder-offcanvas{

            font-size: 1.5rem;
            font-family: 'Space Grotesk', sans-serif;
            color: #1e1e1e;     
        }
        .burger-icon {

            visibility: visible;
            font-size: 1.5rem;
            color: #5181C1;
            font-weight: 700;
            margin-inline-end: 15px;
        }
        .burger-item-close{

            color: #5181C1;
        }
        .dropdown-item {

            display: block;
            width: ;
        }
    }
</style>