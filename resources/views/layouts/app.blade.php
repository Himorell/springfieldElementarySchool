<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSS -->
    <link href="{{ asset('css/listtudent.css') }}" rel="stylesheet">
    <link href="{{ asset('css/scores.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm opacity-75">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <a class="navbar-brand" href="#">
                        <img src="css/imgwelcome/logo.png" alt="Bootstrap" width="" height="100">
                    </a>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('students.index') }}">Students</a>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('scores.index') }}">Scores</a>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @guest
            <main class="py-0">
                @yield('content')
            </main>
        @else
        <main class="py-0">
            <div class="row">
                <div class="col-md-2">
                    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-warning" style="width: 260px; height:600px;">
                        <img src="css/img/skinner.jpg" class="img-rounded">
                        <hr>
                        <ul class="nav nav-pills flex-column mb-auto">
                          <li class="nav-item">
                            <a href="#" class="nav-link active" aria-current="page">
                              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                              Home
                            </a>
                          </li>
                          <li>
                            <a href="#" class="nav-link text-white">
                              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                              Students
                            </a>
                          </li>
                          <li>
                              <div class="dropdown">
                                  <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="css/img/skinner.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
                                    <strong>Subjects</strong>
                                  </a>
                                  <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                    <li><a class="dropdown-item" href="#">Language</a></li>
                                    <li><a class="dropdown-item" href="#">Maths</a></li>
                                    <li><a class="dropdown-item" href="#">Music</a></li>
                                    <li><a class="dropdown-item" href="#">Art</a></li>
                                    <li><a class="dropdown-item" href="#">Biology</a></li>
                                  </ul>
                            </div>
                        </li>
                        </ul>
                        <hr>
                    </div>
                </div>
                <div class="col-md-10">
                    @yield('content')
                </div>
            </div>
            
        </main>
        @endguest
        
    </div>
</body>
</html>
