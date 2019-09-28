<!-- Right Side Of Navbar -->
@guest('customer')
    <li>
        <a class="nav-link @if(Route::is('login') || Route::is('register') ) active @endif " href="{{ route('login') }}">
        <i class="fas fa-user-alt"></i> {{ __('auth.account') }}</a>
    </li>
@else
    <li>
        <a href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
        <i class="fas fa-user-alt"></i> {{ Auth::guard('customer')->user()->name }} <span class="caret"></span></a>
        <ul>
            <li class="right-first">
            <a class=" nav-link @if(Request::is('mon-compte')) active @endif" href="{{route('pages.account')}}"> Mon compte</a></li>
            <li class="right-second"><a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>
            </li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>
    </li>
@endguest