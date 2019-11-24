@extends(Theme::use().'layouts.default')

@section('css')
    @parent
    <link href="{{ mix('modules/post/css/app.css') }}" rel="stylesheet" type="text/css">
@stop

@section('content')

<div class="container py-4">

    <breadcrumb-component breadcrumb='@json($breadcrumb)'></breadcrumb-component>

    <div id="posts_container">

        <page-title-component title="{{ $category_title }}"></page-title-component>

        @include('post::themes.' . Module::find('Post')->get('theme') . '.includes.category')

    </div>

</div>

@endsection

@section('scripts')
    @parent
    <script src="{{ mix('modules/post/js/app.js') }}"></script>
@stop