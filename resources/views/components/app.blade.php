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
                        <p class="page-name-placeholder position-absolute top-50 start-50 translate-middle ">{{ $pageTitle }}</p>
                        <i class="burger-icon bi bi-list" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-expanded="false"></i>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title nama-company-placeholder-offcanvas" id="offcanvasNavbarLabel">CV TRI JAYA</h5>
                                <button type="button" class="btn-close burger-item-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body navmenu-container">
                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 gap-4">
                                    <li class="nav-item">
                                        <a class="navmenu nav-link ps-2" aria-current="page" href="{{ url('/')}}">BERANDA</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="navmenu nav-link ps-2" href="{{ url('/product') }}">PRODUK</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="navmenu nav-link ps-2" href="{{ url('/project') }}">PROYEK</a>
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

        <div class="footer-container card-footer">

            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="row">
                        <a href="" class="footer-company-name">CV TRI JAYA</a>
                        <p class="footer-address">Jl. Kemiri No.51 Pondok Cabe Udik, Pamulang, Tangerang Selatan<br>Banten 15418</p>
                        <p class="footer-copyright"><i class="bi bi-c-circle"></i>&nbsp CV Tri Jaya - Indonesia</p>
                    </div>

                </div>
                <div class="contact-menu-container col-md-4 col-lg-3">
                    <p class="footer-menu-header mb-4">CONTACT US</p>
                    <a href="" class="footer-menu-btn px-4 py-2 me-2 d-inline-block"><i class="bi bi-envelope-at pe-2 text-warning"></i> Gmail</a>
                    <a href="" class="footer-menu-btn px-4 py-2 me-2 mt-2 d-inline-block "><i class="bi bi-whatsapp pe-2 text-success"></i> Whatsapp</a>
                </div>
                <div class="explore-menu-container col-md-2">
                    <p class="footer-menu-header">EXPLORE</p>
                    <div class="row gap-1">
                        <a href="" class="footer-menu">Home</a>
                        <a href="" class="footer-menu">Product</a>
                        <a href="" class="footer-menu">Project</a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3">
                    <div class="jadwal-menu-container row">
                        <p class="footer-menu-header p-0">JADWAL BUKA</p>
                        <div class="col p-0">
                            <div class="footer-menu">Senin - Sabtu</div>
                            <div class="footer-menu">Minggu</div>
                        </div>
                        <div class="col p-0">
                            <div class="footer-menu">08.15 - 16.30 WIB</div>
                            <div class="footer-menu">TUTUP</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<style>

    .page-name-placeholder{

        display: none;
    }
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

        background-color: #1e1e1e;
        padding: 50px 100px 50px 100px;
    }
    .footer-company-name{

        font-size: 2rem;
        font-weight: 700;
        font-family: 'Space Grotesk', sans-serif;
        text-decoration: none;
        color: #FFFFFF;
    }
    .footer-address{

        font-size: 0.875rem;
        color: #FFFFFF;
    }
    .footer-copyright{

        font-size: 0.875rem;
        color: #FFFFFF;
    }
    .footer-menu-header{

        font-size: 1.125rem;
        font-weight: 600;
        color: #FFFFFF;
    }
    .footer-menu-btn{

        background-color: #1e1e1e;
        border: 1px solid #FFFFFF;
        border-radius: 2px;
        text-decoration: none;
        color: #FFFFFF;
    }
    .footer-menu{

        font-size: 0.875rem;
        text-decoration: none;
        color: #FFFFFF;
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
        .footer-container{

            padding: 50px 50px 50px 50px;
        }
    }

    @media only screen and (max-width: 767.5px) {

        .page-name-placeholder{

            display: inline;
            color: #1e1e1e;
            font-size: 1rem;
            font-weight: 400;
        }
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
        .explore-menu-container{

            display: none;
        }
        .jadwal-menu-container{

            display: none;
        }
    }
    ::-webkit-scrollbar {
        width: 10px;
        height: 10px;
        background-color: #eaeaea;
        border-radius: 50px;
    }
    ::-webkit-scrollbar-thumb {
        background-color: #5181C1;
        border-radius: 50px;
    }
    ::-webkit-scrollbar-thumb:hover {
        background-color: #4079c3;
    }
</style>
