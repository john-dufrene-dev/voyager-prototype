@extends('themes.'.config('prototype.theme').'./layouts/default')

@section('meta_robots', 'index,follow')
@section('meta_title') @parent | Liste des article @endsection
@section('meta_keywords', 'Articles,Posts')
@section('meta_description') @parent | Liste des article @endsection
@section('page_title') @parent | Liste des article @endsection

@section('content')

    @if (count($posts) > 0)
        <div class="container">
            <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ route('articles.show', ['slug' => $post->slug]) }}">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{Voyager::image($post->thumbnail('medium'))}}" />
                        </a> 
                    <div class="card-body">
                        <h3>{{ $post->title }}</h3>
                        <p class="card-text">{{{ isset($post->excerpt) ? $post->getShortExcerptAttribute() : '...' }}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                @if (Auth::check())
                                    @if ( (Auth::user()->id == $post->id) || Auth::user()->hasRole(['admin']) )
                                        <button type="button" class="btn btn-sm btn-infos">
                                        <a href="{{ route('voyager.posts.edit', ['id' => $post->id]) }}">Editer</a>
                                        </button>
                                    @endif
                                @endif
                            </div>
                            <small class="text-muted">{!! 'Posté le : ' . $post->created_at->format('jS M. Y') !!}</small>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach
            </div>
            {{ $posts->links('themes.'.config('prototype.theme').'.partials.pagination.custom_2') }}
        </div>
    @else
        <div class="container">Aucun Articles</div>
    @endif

@endsection