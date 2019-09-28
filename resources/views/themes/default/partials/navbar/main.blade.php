<nav class="navbar navbar-expand-md navbar-light bg-white py-3">
    <div class="container">

        <button class="navbar-toggler btn-navbar-bottom" type="button" data-toggle="collapse" 
        data-target="#bottomNavbar" aria-controls="bottomNavbar" 
        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if(setting('site.logo'))
        <a href="{{ url('/') }}"><img src="/storage/{{ setting('site.logo') }}" 
        alt="{{ setting('site.title') }}" title="{{ setting('site.title') }}" height="38px" /></a>
        @else
        <a href="{{ url('/') }}"><img src="/img/logo.png" 
        alt="{{ setting('site.title') }}" title="{{ setting('site.title') }}" height="38px" /></a>
        @endif

        <div class="" id="headerNavbar">
            <!-- Left Side Of Navbar -->
            {{-- <ul class="navbar-nav ml-auto left-navbar">
                {!! menu('header', Theme::use().'partials.navbar.menus._left') !!}
            </ul> --}}


            <!-- Right Side Of Navbar -->
            @if(Module::find('Customer')->enabled())
                <ul class="navbar-nav ml-auto right-navbar"> 
                    @include(Theme::use().'partials.navbar.menus._right')
                </ul>
            @endif
        </div>
    </div>
</nav>

<nav class="navbar shadow-sm navbar-expand-md py-1 bottom-navbar">
    <div class="container">

        <div class="collapse navbar-collapse" id="bottomNavbar">

            <ul class="navbar-nav bottom-collapse-navbar mx-auto">
                {!! menu('header', Theme::use().'partials.navbar.menus._bottom') !!}
            </ul>
        </div>

    </div>
</nav>