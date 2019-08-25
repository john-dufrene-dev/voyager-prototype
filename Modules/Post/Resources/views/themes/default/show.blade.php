@extends(Theme::use().'layouts.default')

@section('meta_robots', 'index,follow')
@section('meta_title') @parent | {!! $post->translate()->seo_title !!} @endsection
@section('meta_description') {!! $post->translate()->meta_description !!} @endsection
@section('meta_keywords') {!! $post->translate()->meta_keywords !!} @endsection
@section('page_title_meta') @parent | {!! $post->translate()->title !!} @endsection
@section('page_title') {{ $post->translate()->title }} @endsection
@section('page_subtitle') @section('page_fluid') container @endsection
{{ __('post::post.published_for') }} : {{  $post->translate()->published_date }} @endsection
@section('breadcrumbs')
    {{ Breadcrumbs::view(Theme::use().'partials.breadcrumbs.bootstrap4',
    'articles.show', $post->category , $post) }}
@endsection

@section('css')
    @parent
    <link href="{{ mix('modules/post/css/app.css') }}" rel="stylesheet" type="text/css">
@stop

@section('content')

    @include(Theme::use().'partials.header.page-title')

    <div class="container">
        <p>{!! $post->translate()->body !!}</p>
        <img src="{{Voyager::image($post->thumbnail('medium'))}}" />
    </div>

@endsection

@section('scripts')
    @parent
    <script type="application/javascript" src="{{ mix('modules/post/js/app.js') }}" defer async></script>
@stop