@extends('themes.' . config('prototype.theme') . '.layouts.default')

@section('meta_robots', 'index,follow')
@section('meta_title') @parent | {!! $post->seo_title !!} @endsection
@section('meta_description') {!! $post->meta_description !!} @endsection
@section('meta_keywords') {!! $post->meta_keywords !!} @endsection
@section('page_title_meta') @parent | {!! $post->title !!} @endsection
@section('page_title') {{ $post->title }} @endsection
@section('page_subtitle') @section('page_fluid') container @endsection
Article ppublié le : {{  $post->published_date }} @endsection

@section('css')
    @parent
    <link href="{{ mix('modules/post/css/app.css') }}" rel="stylesheet" type="text/css">
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
    <script type="application/javascript" src="{{ mix('modules/post/js/app.js') }}" defer async></script>
@stop