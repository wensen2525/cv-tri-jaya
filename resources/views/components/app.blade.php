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
    <div id="app">

        <nav class="nav-container navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">

                {{-- New Nav --}}
                <nav class="nav-container navbar bg-white shadow-sm fixed-top">
                    <div class="container-fluid">
                        <div class="left-nav-container">
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
                                        <a class="navmenu nav-link" aria-current="page" href="{{ url('/')}}">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="navmenu nav-link" href="{{ url('/product') }}">PRODUCT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="navmenu nav-link" href="#">PROJECT</a>
                                    </li>
                            </div>
                        </div>
                    </div>
                </nav>



                {{-- <div class="dropdown">
                    <i class="burger-icon bi bi-list" type="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                    <ul class="dropdown-menu">
                        <li><button class="dropdown-item" type="button">HOME</button></li>
                        <li><button class="dropdown-item" type="button">PRODUCT</button></li>
                        <li><button class="dropdown-item" type="button">PROJECT</button></li>
                    </ul>
                </div>
                <div class="left-nav-container">
                    <a class="row navbar-brand" href="{{ url('/') }}">
                        <img src="{{ url('./storage/gambar/logo-color.png') }}" alt="Logo" class="company-logo col p-0">    
                        <p class="nama-company-placeholder col m-0 ms-3">CV TRI JAYA</p>
                    </a>
                </div> --}}
                {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                @auth
                <ul class="navbar-nav me-auto col d-flex justify-content-center">
                @if(Auth::user()->role == 'ADMIN')
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">DASHBOARD</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('jenis.index') }}">JENIS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('kaca.index') }}">KACA</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('ukuran.index') }}">UKURAN</a></li>
                @elseif (Auth::user()->role == 'USER')
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">DASHBOARD</a></li>
                    <li class="nav-item"><a class="nav-link" href="">PESAN</a></li>
                    <li class="nav-item"><a class="nav-link" href="">KACA</a></li>
                @endif
                @guest
                <a class="dropdown-item" href="/">
                    {{ __('Home') }}
                </a>
                @endguest
                </ul>
                @endauth

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
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

        <main>
            {{ $slot }}
        </main>

        <div class="footer-container card-footer p-3 mt-5">

            <div class="row">
                <div class="col">
                    <div class="row">
                        <a href="">CV TRI JAYA</a>
                        <a href="">Product</a>
                        <a href="">Project</a>
                    </div>

                </div>
                <div class="col">
                    Product
                </div>
                <div class="col">
                    Project
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<style>

    .nav-container {

        height: 90px;
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
    .navmenu-container {

        margin-inline-end: 70px;
    }
    .navmenu{

        color: #1e1e1e;
    }
    .navmenu:hover{

        color: #CAB172;
        font-weight: 700;
    }
    .burger-icon {

        visibility: hidden;
    }
    .footer-container{

        background-color: red;
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
    }
    ::-webkit-scrollbar {
        width: 10px;
        background-color: #d2d2d2;
    }
    ::-webkit-scrollbar-thumb {
        background-color: #5181C1;
        border-radius: 50px;
    }
    ::-webkit-scrollbar-thumb:hover {
        background-color: #4079c3;
    }
</style>
