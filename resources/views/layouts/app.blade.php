<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav>
            <div class="container nav-wrapper">
                <!-- Branding Image -->
                <a href="{{ url('/') }}" class="brand-logo">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <!-- Collapsed Hamburger -->
                <a href="#" data-activates="mobile-demo" class="button-collapse">
                    <i class="material-icons">menu</i>
                </a>

                <!-- Right Side Of Navbar -->
                <ul class="right hide-on-med-and-down">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <!-- Dropdown Trigger -->
                        <li>
                            <a class="dropdown-button" href="#!" data-activates="dropdown">
                                {{ Auth::user()->name }}
                                <i class="material-icons right">arrow_drop_down</i>
                            </a>
                        </li>

                        <!-- Dropdown Structure -->
                        <ul id="dropdown" class="dropdown-content">
                            <li>
                                <a href="#!">Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    @endif
                </ul>

                <ul class="side-nav" id="mobile-demo">
                    <li><a href="{{ url('home') }}">Home</a></li>
                </ul>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script type="text/javascript">
        $( document ).ready(function(){
            $(".button-collapse").sideNav();
        })
    </script>
</body>
</html>
