@extends('themes.'.config('prototype.theme').'.layouts.default')

@section('meta_robots', 'index,follow')
@section('meta_title') @parent | {{ __('seo.homepage.meta_title') }} @endsection
@section('meta_description') @parent | {{ __('seo.homepage.meta_description') }} @endsection
@section('meta_keywords') {{ __('seo.homepage.meta_keywords') }} @endsection
@section('page_title_meta') @parent | {{ __('seo.homepage.page_title_meta') }} @endsection
@section('page_title') {{ __('seo.homepage.page_title') }} @endsection

@section('content')

@include('themes.'.config('prototype.theme').'.partials.header.page-title')

<div class="container">

    <div class="row justify-content-center">
        
        <example-component></example-component>

    </div>
</div>

@endsection
