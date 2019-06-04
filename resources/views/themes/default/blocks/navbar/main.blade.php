<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm py-4 sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"> {{ config('app.name', 'Laravel') }} </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            {!! menu('header', 'themes.'.config('prototype.theme').'.blocks.navbar.menus._left') !!}

            <!-- Right Side Of Navbar -->
            @include('themes.'.config('prototype.theme').'.blocks.navbar.menus._right')
            
        </div>
    </div>
</nav>