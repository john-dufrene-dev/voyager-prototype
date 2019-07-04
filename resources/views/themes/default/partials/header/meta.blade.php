<meta charset="UTF-8">

<meta name="robots" content="@yield('meta_robots', config('prototype.seo.robots'))">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="@section('meta_description') {{ setting('site.description', config('prototype.seo.meta_description')) }} @show">
<meta name="keywords" content="@yield('meta_keywords', config('prototype.seo.meta_keywords'))">
<meta name="author" content="@yield('meta_author', config('prototype.seo.meta_author'))">
<meta name="title" content="@section('meta_title') {{ setting('site.meta_title', config('prototype.seo.meta_title')) }} @show">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Theme -->
<meta name="prototype-theme" content="{{ config('prototype.theme') }}">
<meta name="prototype-color-primary" content="{{ config('prototype.colors.primary') }}">
<meta name="prototype-color-secondary" content="{{ config('prototype.colors.secondary') }}">

<title>@section('page_title') {{ setting('site.title', config('prototype.seo.page_title')) }} @show</title>
