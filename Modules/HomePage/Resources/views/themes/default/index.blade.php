@extends(Theme::use().'layouts.default')

@section('content')

<div class="py-4 container">
    <div id="page-title" class="mt-4 h1-page-title">
        <h1 class="text-center"> {{ __('seo.homepage.page_title') }} </h1>
    </div>
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
