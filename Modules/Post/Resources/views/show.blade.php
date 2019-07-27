@extends('themes.'.config('prototype.theme').'.layouts.default')

@section('meta_robots', 'index,follow')
@section('meta_title') @parent | {!! $post->seo_title !!} @endsection
@section('meta_description') {!! $post->meta_description !!} @endsection
@section('meta_keywords') {!! $post->meta_keywords !!} @endsection
@section('page_title_meta') @parent | {!! $post->title !!} @endsection
@section('page_title') {{ $post->title }} @endsection
@section('page_subtitle') {!! 'Posté le : ' . $post->created_at->format('jS M. Y') !!} @endsection

@section('css')
    @parent
    <link href="{{ mix('modules/post/css/app.css') }}" rel="stylesheet">
@stop

@section('content')

    @include('themes.'.config('prototype.theme').'.partials.header.page-title')

    <div class="container">
        <p>{!! $post->body !!}</p>
        <img src="{{Voyager::image($post->thumbnail('medium'))}}" />
    </div>

@endsection

@section('scripts')
    @parent
    <script src="{{ mix('modules/post/js/app.js') }}" defer></script>
@stop