@extends('themes.' . config('prototype.theme') . '.layouts.default')

@section('meta_robots', 'index,follow')
@section('meta_title') @parent | Liste des articles 
    @if(Route::is('articles.category')) | {{ $category->name }} @endif @endsection
@section('meta_description') @parent | Liste des articles 
    @if(Route::is('articles.category')) | {{ $category->name }} @endif @endsection
@section('meta_keywords') Articles, Posts @if(Route::is('articles.category')),{{ $category->name }} @endif @endsection
@section('page_title_meta')  @parent | Liste des articles 
    @if(Route::is('articles.category')) | {{ $category->name }} @endif @endsection
@section('page_title')
    @if(Route::is('articles.category')) {{ $category->name }} @else Liste des articles  @endif @endsection
@section('page_subtitle') @section('page_fluid') container-fluid @endsection Découvrez nos différents articles @endsection

@section('css')
    @parent
    <link href="{{ mix('modules/post/css/app.css') }}" rel="stylesheet" type="text/css">
@stop

@section('content')

    @include('themes.' . config('prototype.theme') . '.partials.header.page-title')

    @if (count($posts) > 0)
        <div class="container">

            <div class="row">
                
                <div class="col-md-3 category-all">
                        
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item @if (Route::is('articles.index')) active @endif">
                            <a href="{{ route('articles.index') }}"> {{ __('generic.all_our_articles') }} </a>
                        </li>
                    @foreach($categories as $cat)
                        <li class="list-group-item 
                        @if(isset($category) && isset($category->slug) && ($category->slug == $cat->slug))
                        {{ 'active' }} @endif">
                            <a class="text-center" href="{{ route('articles.category', $cat->slug) }}">{{ $cat->name }}</a>
                        </li>
                    @endforeach
                    </ul>

                    <div class="mt-3">
                        <pre>@if(0 == count($posts)) Aucun articles 
                            @elseif(1 == count($posts)) {{ count($posts) }} article
                            @else {{ count($posts) }} articles @endif
                        </pre>
                    </div>
                    
                </div>

                <div class="col-md-9">
                    <div class="row">
                        @foreach($posts as $post)
                        <article class="col-md-6 col-sm-12 mb-5 posts-all" id="post-{{ $post->id }}" typeof="Article">

                            <meta property="name" content="{{ $post->title }}">
                            <meta property="author" typeof="Person" content="admin">
                            <meta property="dateModified" content="{{ Carbon\Carbon::parse($post->updated_at)->toIso8601String() }}">
                            <meta class="uk-margin-remove-adjacent" property="datePublished" content="{{ Carbon\Carbon::parse($post->published_date)->toIso8601String() }}">

                            <div class="card mb-4">
                                <a href="{{ $post->link() }}">
                                    <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{ $post->image() }}" />
                                </a> 
                                <div class="card-body">
                                    <h3>{{ $post->title }}</h3>
                                    <h6 class="posts-category">Catégorie : 
                                        <a href="{{ $post->linkToCategory() }}">{{ $post->category->name }}</a></h6>
                                    <p class="card-text">{{{ isset($post->excerpt) ? $post->getShortExcerptAttribute() : '...' }}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted"> Posté le : {{ Carbon\Carbon::parse($post->created_at)->toFormattedDateString() }} </small>
                                    </div>
                                    <a href="{{ $post->link() }}" class="btn btn-block btn-outline-prototype mt-4">Découvrir l'article</a>
                                </div>
                            </div>

                        </article>                        
                        @endforeach
                    </div>
                    {{ $posts->links('themes.'.config('prototype.theme').'.partials.pagination.custom_2') }}
                </div>
            </div>
            
        </div>
    @else
        <div class="container">Aucun Articles</div>
    @endif

@endsection

@section('scripts')
    @parent
    <script type="application/javascript" src="{{ mix('modules/post/js/app.js') }}" defer async></script>
@stop