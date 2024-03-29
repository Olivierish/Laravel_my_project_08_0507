<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','myProjekt')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand fw-bold text-primary" href="{{ url('/') }}">
                    Tag 08
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
</button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link {{Request::is('/') ? 'btn bg-success' : ''}}" href="/">Startseite</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::is('about') ? 'btn bg-success' : ''}}" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::is('portfolio') ? 'btn bg-success' : ''}}" href="/portfolio">Referenzen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::is('user*') ? 'btn bg-success' : ''}}" href="/user">Alle User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::is('post*') ? 'btn bg-success' : ''}}" href="/post">Beiträge</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::is('kontakt') ? 'btn bg-success' : ''}}" href="/kontakt">Kontakt</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::is('home','login','register') ? 'btn bg-success' : ''}}" href="/home">myHome</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link text-primary  fw-bold" href="#">
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                                <li class="nav-item">
                                    <a class="nav-link text-success" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <!-- ö -->
            @auth
            <div class="container">
                <div class="col-12 h4 p-2 bg-primary">
                    Hallo <b class="text-light">{{auth()->id()}}</b>, schön dass Du da bist! 👌
                    <br/>
                    Hallo <b class="text-light">{{auth()->user()->name}}</b>, schön dass Du da bist! 👌
                    <br/>
                    Hallo <b class="text-light">{{Auth::user()->name}}</b>, schön dass Du da bist! 👌

                    <form action="{{ route('logout') }}" method="POST" class="d-inline-block">
                        @csrf
                        <button class="btn btn-sm btn-warning">Logout</button>
                        <!--If there one button in a form, you can omit to add it's type. That button will earn a type:submit attribute -->
                    </form>
                </div>
            </div>
            @endauth
            <!-- ö -->
            
            @isset($msg_success)
            <div class="container">
                <div class="alert alert-success">
                    {!! $msg_success !!}
                </div>
            </div>
            @endisset

            @if($errors->any())
            <div class="container">
                <div class="alert alert-danger">
                    Bitte überprüfe deine Eingaben
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{!! $error !!}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
            @yield('content')
        </main>
    </div>
</body>
</html>
