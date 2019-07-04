<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('themes.'.config('prototype.theme').'.partials.header.meta')
        @include('themes.'.config('prototype.theme').'.partials.header.link')
    </head>
    <body>
        <div id="app">
            
            @include('themes.'.config('prototype.theme').'.partials.navbar.main')

            <main class="py-4 body-main">
                @yield('content')
            </main>

            @include('themes.'.config('prototype.theme').'.partials.footer.main')

        </div>

        @include('themes.'.config('prototype.theme').'.partials.footer.script')

    </body>
</html>