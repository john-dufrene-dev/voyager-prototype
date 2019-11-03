@extends(Theme::use().'layouts.default')

@section('meta_robots', 'index,follow')
@section('meta_title') @parent | @if( true == config('voyager.multilingual.enabled')) {{ $post->translate()->seo_title }} @else {{ $post->seo_title }} @endif @endsection
@section('meta_description') @if( true == config('voyager.multilingual.enabled')) {{ $post->translate()->meta_description }} @else {{ $post->meta_description }} @endif @endsection
@section('meta_keywords') @if( true == config('voyager.multilingual.enabled')) {{ $post->translate()->meta_keywords }} @else {{ $post->meta_keywords }} @endif @endsection
@section('page_title_meta') @parent | @if( true == config('voyager.multilingual.enabled')) {{ $post->translate()->title }} @else {{ $post->title }} @endif @endsection
@section('page_title')  @if( true == config('voyager.multilingual.enabled')) {{ $post->translate()->title }} @else {{ $post->title }} @endif @endsection

@section('page_subtitle') @section('page_fluid') container @endsection
{{ __('modules.post.published_for') }} : @if( true == config('voyager.multilingual.enabled')) {{ $post->translate()->published_date }} @else {{ $post->published_date }} @endif @endsection
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

    @include('post::themes.' . Module::find('Post')->get('theme') . '.includes.post')

@endsection

@section('scripts')
    @parent
    <script src="{{ mix('modules/post/js/app.js') }}"></script>
@stop