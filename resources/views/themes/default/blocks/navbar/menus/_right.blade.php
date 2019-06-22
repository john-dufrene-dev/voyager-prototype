<!-- Right Side Of Navbar -->
<ul class="navbar-nav ml-auto right-navbar">
    <!-- Authentication Links -->
    @if (config('prototype.account'))
        @guest
            <li class="nav-item">
                <a class="a-right-navbar nav-link @if(Request::is('login')) active @endif " href="{{ route('login') }}">{{ __('Auth.login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="a-right-navbar nav-link @if(Request::is('register')) active @endif " href="{{ route('register') }}">{{ __('Auth.register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right navbar-dropdown-menu shadow-sm" aria-labelledby="navbarDropdown">
                    @if (Auth::user()->is('admin'))
                        @auth
                            <a class="dropdown-item" href="{{route('voyager.dashboard')}}">Administration</a>
                        @endauth
                    @endif
                    <a class="dropdown-item @if(Request::is('mon-compte')) active @endif" href="{{route('pages.account')}}">Mon compte</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    @endif
</ul>