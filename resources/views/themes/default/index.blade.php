<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">

        <meta name="robots" content="@yield('meta_robots', config('prototype.seo.robots'))">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="@section('meta_description') {{ setting('site.description', config('prototype.seo.meta_description')) }} @show">
        <meta name="keywords" content="@yield('meta_keywords', config('prototype.seo.meta_keywords'))">
        <meta name="author" content="@yield('meta_author', config('prototype.seo.meta_author'))">
        <meta name="title" content="@section('meta_title') {{ setting('site.meta_title', config('prototype.seo.meta_title')) }} @show">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@section('page_title') {{ setting('site.title', config('prototype.seo.page_title')) }} @show</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            
            @include('themes.'.config('prototype.theme').'.blocks.navbar.main')

            <main class="py-4 body-main">
                @yield('content')
            </main>

            @include('themes.'.config('prototype.theme').'.blocks.footer.main')

        </div>
    </body>
</html>