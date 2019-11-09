@extends(Theme::use().'layouts.default')

@section('css')
    @parent
    <link href="{{ mix('modules/post/css/app.css') }}" rel="stylesheet" type="text/css">
@stop

@section('content')

    @include('post::themes.' . Module::find('Post')->get('theme') . '.includes.breadcrumbs.post')

    @include('post::themes.' . Module::find('Post')->get('theme') . '.includes.post')

@endsection

@section('scripts')
    @parent
    <script src="{{ mix('modules/post/js/app.js') }}"></script>
@stop