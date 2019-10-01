@extends(Theme::use().'layouts.default')

@section('meta_robots', 'index,follow')
@section('meta_title') @parent | 
@if(null != Cors::get('PAGE_HOME_META_TITLE')) {{ Cors::get('PAGE_HOME_META_TITLE') }}
@else {{ __('seo.homepage.meta_title') }} @endif @endsection
@section('meta_description') @parent |
@if(null != Cors::get('PAGE_HOME_META_DESCRIPTION')) {{ Cors::get('PAGE_HOME_META_DESCRIPTION') }}
@else {{ __('seo.homepage.meta_description') }} @endif @endsection
@section('meta_keywords') @if(null != Cors::get('PAGE_HOME_META_KEYWORDS')) {{ Cors::get('PAGE_HOME_META_KEYWORDS') }}
@else {{ __('seo.homepage.meta_keywords') }} @endif @endsection
@section('page_title_meta') @parent |
@if(null != Cors::get('PAGE_HOME_META_TITLE')) {{ Cors::get('PAGE_HOME_META_TITLE') }}
@else {{ __('seo.homepage.page_title_meta') }} @endif @endsection
@section('page_title') {{ __('seo.homepage.page_title') }} @endsection

@section('content')

@include(Theme::use().'partials.header.page-title')

<div class="container">

    <div id="homepage" class="row justify-content-center">
        <example-component></example-component>
    </div>

</div>

@endsection

@section('scripts')
    @parent
    <script type="application/javascript" src="{{ mix('modules/homepage/js/app.js') }}"></script>
@stop
