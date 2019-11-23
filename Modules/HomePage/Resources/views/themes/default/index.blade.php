@extends(Theme::use().'layouts.default')

@section('content')

<page-title-component title="{{ __('seo.homepage.page_title') }}"></page-title-component>

<div class="container">

    <div id="homepage" class="row justify-content-center">
        <example-component></example-component>
    </div>

</div>

@endsection

@section('scripts')
    @parent
    <script src="{{ mix('modules/homepage/js/app.js') }}"></script>
@stop
