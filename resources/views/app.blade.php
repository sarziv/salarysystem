<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div id="app">
    <nav class="navbar navbar-expand-sm" style="background-color: #e3f2fd;">
        <div class="container">
            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/home') }}">
                {{ config('app.name', 'Laravel') }}
            </a>

            <!-- Collapsed Hamburger -->
            <button class="navbar-toggler togglerColor" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <i class="fas fa-play"></i>
             </button>

            <div class="collapse navbar-collapse text-center" id="collapsibleNavbar">
                <!-- Left Side Of Navbar -->
                @if (!Auth::guest())
                <hr>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/home"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/add"><i class="fas fa-plus"></i> Pridėti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tracker"><i class="fab fa-stack-overflow"></i> Mano istorija</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/manage"><i class="far fa-list-alt"></i> Mėnesio alga</a>
                    </li>
                </ul>
                @endif
                <hr>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Register</a></li>
                    @else
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/addCalc.js') }}"></script>
</body>
</html>