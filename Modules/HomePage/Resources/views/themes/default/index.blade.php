@extends(Theme::use().'layouts.default')

@section('meta_robots', 'index,follow')
@section('meta_title') @parent | {{ __('seo.homepage.meta_title') }} @endsection
@section('meta_description') @parent | {{ __('seo.homepage.meta_description') }} @endsection
@section('meta_keywords') {{ __('seo.homepage.meta_keywords') }} @endsection
@section('page_title_meta') @parent | {{ __('seo.homepage.page_title_meta') }} @endsection
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
