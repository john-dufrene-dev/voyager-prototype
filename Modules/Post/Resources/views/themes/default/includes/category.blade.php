@if (count($posts) > 0)
@php $translatable = (true == verify_trans() ) ? true : false @endphp
    <div id="post-component" class="container">

        <div class="row">
            
            <div class="col-md-3 category-all">
                    
                <ul class="list-group list-group-flush">
                    <li class="list-group-item @if (Route::is('articles.index')) active @endif">
                        <a href="{{ route('articles.index') }}"> {{ __('generic.all_our_articles') }} </a>
                    </li>

                @if($translatable == true)
                    @foreach($categories->translate() as $cat)
                        <li class="list-group-item 
                        @if(route('articles.category', $cat->translate()->slug) == Request::url())
                        active @endif">
                            <a class="text-center" href="{{ route('articles.category', $cat->translate()->slug) }}">
                            {{ $cat->translate()->name }}</a>
                        </li>
                    @endforeach
                @else
                    @foreach($categories as $cat)
                        <li class="list-group-item 
                        @if(route('articles.category', $cat->slug) == Request::url())
                        active @endif">
                            <a class="text-center" href="{{ route('articles.category', $cat->slug) }}">
                            {{ $cat->name }}</a>
                        </li>
                    @endforeach
                @endif
                
                </ul>

                <div class="mt-3">
                    <pre>@if(0 == $posts->count()) Aucun articles 
                        @elseif(1 ==  $posts->count()) {{ $posts->count() }} article
                        @else {{ $posts->count() }} articles @endif
                    </pre>
                </div>
                
            </div>

            <div class="col-md-9">
                <div class="row">
                    @foreach($posts as $post)
                    @php $post_id = (true == $translatable) ? $post->translate()->id : $post->id @endphp
                    <article class="col-md-6 col-sm-12 mb-5 posts-all" id="post-{{ $post_id }}" typeof="Article">

                        <meta property="name" content="@if(true == $translatable) {{ $post->translate()->title }} 
                            @else {{ $post->title }} @endif">
                        <meta property="author" typeof="Person" content="admin">
                        <meta property="dateModified" content="{{ Carbon\Carbon::parse($post->updated_at)->toIso8601String() }}">
                        <meta class="uk-margin-remove-adjacent" property="datePublished" content="{{ Carbon\Carbon::parse($post->published_date)->toIso8601String() }}">

                        <div class="card mb-4">
                            <a href="{{ $post->link() }}">
                                <img class="bd-placeholder-img card-img-top" alt="@if(true == $translatable) {{ $post->translate()->title }} 
                            @else {{ $post->title }} @endif" src="{{ $post->img() }}" />
                            </a> 
                            <div class="card-body">
                                <h3> @if(true == $translatable) {{ $post->translate()->title }} @else {{ $post->title }} @endif </h3>
                                <h6 class="posts-category">{{ __('modules.post.category') }}  : 
                                    <a href="{{ $post->linkToCategory() }}">@if(true == $translatable) {{ $post->category->translate()->name }} 
                                        @else {{ $post->category->name }} @endif</a></h6>
                                <p class="card-text">{{{ isset($post->excerpt) ? $post->getShortExcerptAttribute() : '...' }}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted"> {{ __('modules.post.posted_at') }} : 
                                    {{ Carbon\Carbon::parse($post->created_at)->toFormattedDateString() }} </small>
                                </div>
                                <a href="{{ $post->link() }}" class="btn btn-block btn-outline-prototype mt-4">{{ __('modules.post.discover_article') }}</a>
                            </div>
                        </div>

                    </article>                        
                    @endforeach
                </div>
                {{ $posts->links(Theme::use().'partials.pagination.custom_2') }}
            </div>
        </div>
        
    </div>
@else
    <div class="container"> {{ __('modules.post.no_articles') }} </div>
@endif