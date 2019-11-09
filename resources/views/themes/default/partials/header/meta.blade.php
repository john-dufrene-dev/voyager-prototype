<meta charset="UTF-8">

@section('seo_tools') {!! SEOMeta::generate() !!} @show

<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon-precomposed" href="/apple-touch-icon.png" type="image/png" />

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Theme -->
<meta name="prototype-theme" content="{{ Theme::get() }}">
<meta name="prototype-color-primary" content="{{ Theme::primary() }}">
<meta name="prototype-color-secondary" content="{{ Theme::secondary() }}">
