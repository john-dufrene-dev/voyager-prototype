<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm py-4 sticky-top">
    <div class="container">
        @if(setting('site.logo'))
        <a href="{{ url('/') }}"><img src="/storage/{{ setting('site.logo') }}" 
        alt="{{ setting('site.title') }}" title="{{ setting('site.title') }}" height="38px" /></a>
        @else
        <a href="{{ url('/') }}"><img src="/img/logo.png" 
        alt="{{ setting('site.title') }}" title="{{ setting('site.title') }}" height="38px" /></a>
        @endif

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerNavbar" aria-controls="headerNavbar" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="headerNavbar">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav ml-auto left-navbar">
                {!! menu('header', Theme::use().'partials.navbar.menus._left') !!}
            </ul>


            <!-- Right Side Of Navbar -->
            @if(Module::find('Customer')->enabled())
                <ul class="navbar-nav right-navbar"> 
                    @include(Theme::use().'partials.navbar.menus._right')
                </ul>
            @endif
        </div>
    </div>
</nav>