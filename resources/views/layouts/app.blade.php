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
<body class="grey lighten-4">
    <div id="app">

        <header>
            <div class="navbar-fixed">
                <nav class="blue-grey darken-4">
                    <div class="nav-wrapper">
                        <!-- Branding Image -->
                        <a href="{{ url('/') }}" class="brand-logo">
                            {{ config('app.name', 'Laravel') }}
                        </a>

                        <!-- Collapsed Hamburger -->
                        <a href="javascript:void(0);" data-activates="slide-out" class="button-collapse">
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
                                    <a class="notification-button" href="javascript:void(0);" data-activates="notifications-dropdown">
                                        <i class="social-notifications">
                                            <small class="notification-badge">
                                                <span class="notification-caption">5</span>
                                            </small>
                                        </i>
                                    </a>
                                </li>
                                
                                <!-- Dropdown Structure -->
                                <ul id="notifications-dropdown" class="dropdown-content">
                                    <li>
                                        <a href="javascript:void(0);">Notifications</a>
                                    </li>
                                    <li class="divider"></li>
                                </ul>

                                <!-- Dropdown Trigger -->
                                <li>
                                    <a class="dropdown-button" href="javascript:void(0);" data-activates="dropdown">
                                        {{ Auth::user()->name }}
                                        <i class="material-icons right">arrow_drop_down</i>
                                    </a>
                                </li>

                                <!-- Dropdown Structure -->
                                <ul id="dropdown" class="dropdown-content">
                                    <li>
                                        <a href="javascript:void(0);">Settings</a>
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
                    </div>
                </nav>
            </div>
        </header>

        <main>
            <aside>
                <ul id="slide-out" class="side-nav fixed">
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-cyan">
                            <i class="material-icons">dashboard</i> Dashboard
                        </a>
                    </li>

                    <li>
                        <ul class="collapsible collapsible-accordion">
                            <li>
                                <a class="collapsible-header waves-effect waves-cyan">
                                    <i class="material-icons">people</i> Users
                                </a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);">Users</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Create User</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                
            </aside>

            <section class="container">
                <ol class="breadcrumb right">
                    <li><a href="javascript:void(0);">Dashboard</a></li>
                    <li class="active">Users</li>
                </ol>

                <h1 class="page-header">Users <small>list of users</small></h1>

                <div class="card-panel">
                    <span>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                    </span>
                </div>
            </section>
        </main>

        <footer>
            
        </footer>

        {{-- @yield('content') --}}
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script type="text/javascript">
        $( document ).ready(function(){
            $(".button-collapse").sideNav();
            $('.dropdown-button').dropdown({
              inDuration: 300,
              outDuration: 225,
              constrainWidth: true, // Does not change width of dropdown to that of the activator
              gutter: 0, // Spacing from edge
              belowOrigin: true, // Displays dropdown below the button
              alignment: 'left', // Displays dropdown with edge aligned to the left of button
              stopPropagation: false // Stops event propagation
            });
            $('.notification-button').dropdown({
              inDuration: 300,
              outDuration: 225,
              constrainWidth: false, // Does not change width of dropdown to that of the activator
              hover: true,
              gutter: 0, // Spacing from edge
              belowOrigin: true, // Displays dropdown below the button
              alignment: 'right', // Displays dropdown with edge aligned to the left of button
              stopPropagation: false // Stops event propagation
            });
        })
    </script>
</body>
</html>
