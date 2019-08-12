@extends('themes.'.config('prototype.theme').'.layouts.default')

@section('meta_robots', 'index,follow')
@section('meta_title') @parent | @lang('prototype.home.homepage') @endsection
@section('meta_description') @parent | @lang('prototype.home.homepage') @endsection
@section('meta_keywords') @parent | @lang('prototype.home.homepage') @endsection
@section('page_title_meta') @parent | @lang('prototype.home.homepage') @endsection
@section('page_title') @lang('prototype.home.homepage') @endsection
{{-- @section('page_subtitle', 'sous-menu') --}}

@section('content')

{{-- @include('themes.'.config('prototype.theme').'.partials.header.page-title') --}}

<div class="container">

    <div class="row justify-content-center">
        
        <example-component></example-component>

    </div>
</div>

@endsection
