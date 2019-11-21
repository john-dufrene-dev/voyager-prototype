<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include(Theme::use().'partials.header.meta')
        @include(Theme::use().'partials.header.link')

        @section('google-analytics')
            @include(Theme::use().'partials.header.google.google-analytics')
        @endsection

    </head>
    <body>
        <div id="app">
            
            @include(Theme::use().'partials.navbar.main')

            {{-- <li><a href="{{ url('locale/en') }}" > EN</a></li>
            <li><a href="{{ url('locale/fr') }}" >FR</a></li> --}}

            @yield('banner')

            <main class="body-main">

                @if ( session('flash_toaster') )
                    @include(Theme::use().'partials.toaster.toast')
                @endif

                @yield('content')

            </main>

            @include(Theme::use().'partials.footer.main')

        </div>

        @include(Theme::use().'partials.footer.script')

    </body>
</html>