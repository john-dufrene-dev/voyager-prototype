@extends(Theme::use().'layouts.default')

@section('content')

<div id="page-title" class="container mt-4 h1-page-title">
    <h1 class="text-center"> {{ __('seo.homepage.page_title') }} </h1>
</div>

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
