@extends('themes.'.config('prototype.theme').'./layouts/default')

@section('meta_robots', 'index,follow')
@section('meta_title', $post->seo_title)
@section('meta_keywords', $post->meta_keywords)
@section('meta_description', $post->meta_description)
@section('page_title', $post->title)

@section('css')
    @parent
    <link href="{{ mix('modules/post/css/app.css') }}" rel="stylesheet">
@stop

@section('content')

    <div class="container">
        <h2>{!! $post->title !!}</h2>
        <p><pre>{!! 'Posté le : ' . $post->created_at->format('jS M. Y') !!}</pre></p>
        <p>{!! $post->body !!}</p>
        <img src="{{Voyager::image($post->thumbnail('medium'))}}" />
    </div>

@endsection

@section('scripts')
    @parent
    <script src="{{ mix('modules/post/js/app.js') }}" defer></script>
@stop