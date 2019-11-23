@extends(Theme::use().'layouts.default')

@section('css')
    @parent
    <link href="{{ mix('modules/post/css/app.css') }}" rel="stylesheet" type="text/css">
@stop

@section('content')

<div class="container py-4">

    @include('post::themes.' . Module::find('Post')->get('theme') . '.includes.breadcrumbs.post')

    <page-title-component title="{{ $post_title }}"></page-title-component>

    <post-component class="container"
        link="@if( true == verify_trans() ) {{ $post->translate()->slug }} @else {{ $post->slug }} @endif ">
    </post-component>

</div>

@endsection

@section('scripts')
    @parent
    <script src="{{ mix('modules/post/js/app.js') }}"></script>
@stop