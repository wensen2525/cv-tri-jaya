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
    <div id="loading" style="max-height: 100vh;max-width: 100vw; min-height: 100vh;min-width: 100vw;display: flex; justify-content: center; align-items: center">
        <lottie-player
            autoplay
            loop
            mode="normal"
            src='{"v":"5.5.5","fr":25,"ip":0,"op":79,"w":300,"h":150,"nm":"Loading-2","ddd":0,"assets":[],"layers":[{"ddd":0,"ind":1,"ty":4,"nm":"icon 2","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":1,"k":[{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.333],"y":[0]},"t":39,"s":[-90]},{"t":79,"s":[270]}],"ix":10},"p":{"a":0,"k":[150,75,0],"ix":2},"a":{"a":0,"k":[53,53,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6}},"ao":0,"shapes":[{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[0,-15.464],[15.464,0],[0,15.464],[-15.464,0]],"o":[[0,15.464],[-15.464,0],[0,-15.464],[15.464,0]],"v":[[28,0],[0,28],[-28,0],[0,-28]],"c":true},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"st","c":{"a":0,"k":[0,0.98,0.706,1],"ix":3},"o":{"a":0,"k":100,"ix":4},"w":{"a":0,"k":10,"ix":5},"lc":2,"lj":1,"ml":10,"bm":0,"nm":"Stroke 1","mn":"ADBE Vector Graphic - Stroke","hd":false},{"ty":"tr","p":{"a":0,"k":[53,53],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"Group 1","np":2,"cix":2,"bm":0,"ix":1,"mn":"ADBE Vector Group","hd":false},{"ty":"tm","s":{"a":1,"k":[{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.333],"y":[0]},"t":51,"s":[0]},{"t":79,"s":[100]}],"ix":1},"e":{"a":1,"k":[{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.333],"y":[0]},"t":39,"s":[0]},{"t":64,"s":[100]}],"ix":2},"o":{"a":0,"k":0,"ix":3},"m":1,"ix":2,"nm":"Trim Paths 1","mn":"ADBE Vector Filter - Trim","hd":false}],"ip":39,"op":79,"st":39,"bm":0},{"ddd":0,"ind":2,"ty":4,"nm":"icon","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":1,"k":[{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.333],"y":[0]},"t":0,"s":[-90]},{"t":40,"s":[270]}],"ix":10},"p":{"a":0,"k":[150,75,0],"ix":2},"a":{"a":0,"k":[53,53,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6}},"ao":0,"shapes":[{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[0,-15.464],[15.464,0],[0,15.464],[-15.464,0]],"o":[[0,15.464],[-15.464,0],[0,-15.464],[15.464,0]],"v":[[28,0],[0,28],[-28,0],[0,-28]],"c":true},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"st","c":{"a":0,"k":[0,0.98,0.706,1],"ix":3},"o":{"a":0,"k":100,"ix":4},"w":{"a":0,"k":10,"ix":5},"lc":2,"lj":1,"ml":10,"bm":0,"nm":"Stroke 1","mn":"ADBE Vector Graphic - Stroke","hd":false},{"ty":"tr","p":{"a":0,"k":[53,53],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"Group 1","np":2,"cix":2,"bm":0,"ix":1,"mn":"ADBE Vector Group","hd":false},{"ty":"tm","s":{"a":1,"k":[{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.333],"y":[0]},"t":12,"s":[0]},{"t":40,"s":[100]}],"ix":1},"e":{"a":1,"k":[{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.333],"y":[0]},"t":0,"s":[0]},{"t":25,"s":[100]}],"ix":2},"o":{"a":0,"k":0,"ix":3},"m":1,"ix":2,"nm":"Trim Paths 1","mn":"ADBE Vector Filter - Trim","hd":false}],"ip":0,"op":40,"st":0,"bm":0}],"markers":[]}'
            style="width: 320px"
            ></lottie-player>
    </div>
    <div id="app" style="display: none">
    <x-alert></x-alert>
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
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
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">DASHBOARD</a></li>
                @elseif (Auth::user()->role == 'USER')
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">DASHBOARD</a></li>
                @endif
                    <li class="nav-item"><a class="nav-link" href="">PESAN</a></li>
                    <li class="nav-item"><a class="nav-link" href="">KACA</a></li>
                </ul>
                @endauth

                <ul class="navbar-nav ms-auto">
                    @guest
                        @if (Route::has('login') && false)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register') && false)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        
                        <li class="nav-item">
                            <a class="nav-link" href=""></a>
                        </li>

                    @else
                        @if (false)
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                        @endif
                    @endguest
                </ul>
            </div>
        </div>
      </nav>

      <main>
            {{ $slot }}
      </main>
    </div>
</body>
</html>