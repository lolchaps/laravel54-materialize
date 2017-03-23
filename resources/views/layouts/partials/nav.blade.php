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