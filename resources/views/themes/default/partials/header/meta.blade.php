<meta charset="UTF-8">

<meta name="robots" content="@yield('meta_robots', config('prototype.seo.robots'))">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="@section('meta_description') {{ setting('site.description', config('seo.meta_description')) }} @show">
<meta name="keywords" content="@section('meta_keywords') {{ setting('site.keywords', config('seo.meta_keywords')) }} @show">
<meta name="author" content="@section('meta_author') {{ setting('site.author', config('seo.meta_author')) }} @show">
<meta name="title" content="@section('meta_title') {{ setting('site.meta_title', config('seo.meta_title')) }} @show">

<link rel="shortcut icon" href="/img/favicon.ico" type="image/ico" />
<link rel="apple-touch-icon-precomposed" href="/images/apple-touch-icon.png" type="image/png" />

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Theme -->
<meta name="prototype-theme" content="{{ config('prototype.theme') }}">
<meta name="prototype-color-primary" content="{{ config('prototype.colors.primary') }}">
<meta name="prototype-color-secondary" content="{{ config('prototype.colors.secondary') }}">

<title>@section('page_title_meta') {{ setting('site.title', config('seo.page_title_meta')) }} @show</title>
