@extends(Theme::use().'layouts.default')

@section('css')
    @parent
    <link href="{{ mix('modules/post/css/app.css') }}" rel="stylesheet" type="text/css">
@stop

@section('content')

    @include('post::themes.' . Module::find('Post')->get('theme') . '.includes.breadcrumbs.category')

    <div id="posts_container">

        <div id="page-title" class="container mt-4 h1-page-title">
            <h1 class="text-center"> 
            @if($posts->total() > 0)
                @if(true == verify_trans() ) {{ $posts[0]->category->translate()->name }} 
                @else {{ $posts[0]->category->name }} @endif
            @else
                {{ __('modules.post.no_articles') }}
            @endif
            </h1>
        </div>

        @include('post::themes.' . Module::find('Post')->get('theme') . '.includes.category')
    </div>

@endsection

@section('scripts')
    @parent
    <script src="{{ mix('modules/post/js/app.js') }}"></script>
@stop