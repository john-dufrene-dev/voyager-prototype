@extends(Theme::use().'layouts.default')

@section('meta_robots', 'index,follow')
@section('meta_title') @parent | {{ __('seo.articles.meta_title') }}
    @if(Route::is('articles.category')) | {{ $category->translate()->name }} @endif @endsection
@section('meta_description') @parent | {{ __('seo.articles.meta_title') }} 
    @if(Route::is('articles.category')) | {{ $category->translate()->name }} @endif @endsection
@section('meta_keywords') {{ __('seo.articles.meta_keywords') }} 
    @if(Route::is('articles.category')),{{ $category->translate()->name }} @endif @endsection
@section('page_title_meta')  @parent | {{ __('seo.articles.page_title_meta') }}  
    @if(Route::is('articles.category')) | {{ $category->translate()->name }} @endif @endsection
@section('page_title')
    @if(Route::is('articles.category')) {{ $category->translate()->name }} 
    @else {{ __('seo.articles.page_title') }}   @endif @endsection
@section('page_subtitle') @section('page_fluid') container @endsection 
    {{ __('post::post.banner_field') }} @endsection
@section('breadcrumbs')
    @if(route::is('articles.category'))
        {{ Breadcrumbs::view(Theme::use().'partials.breadcrumbs.bootstrap4',
        'articles.category', $category) }}
    @else
        {{ Breadcrumbs::view(Theme::use().'partials.breadcrumbs.bootstrap4',
        'articles.index') }}
    @endif
@endsection

@section('css')
    @parent
    <link href="{{ mix('modules/post/css/app.css') }}" rel="stylesheet" type="text/css">
@stop

@section('content')

    @include(Theme::use().'partials.header.page-title')

    <div id="posts_container">
        @include('post::themes.' . Module::find('Post')->theme . '.includes.posts')
    </div>

@endsection

@section('scripts')
    @parent
    <script type="application/javascript" src="{{ mix('modules/post/js/app.js') }}"></script>
@stop