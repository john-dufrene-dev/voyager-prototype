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

            <main class="py-4 body-main">
                @yield('content')
            </main>

            @include(Theme::use().'partials.footer.main')

        </div>

        @include(Theme::use().'partials.footer.script')

    </body>
</html>