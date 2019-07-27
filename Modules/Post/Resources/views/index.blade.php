@extends('themes.'.config('prototype.theme').'.layouts.default')

@section('meta_robots', 'index,follow')
@section('meta_title') @parent | Liste des articles @endsection
@section('meta_description') @parent | Liste des articles @endsection
@section('meta_keywords') Articles,Posts @endsection
@section('page_title_meta')  @parent | Liste des articles @endsection
@section('page_title') Liste des articles @endsection
@section('page_subtitle') @if(0 == count($posts)) Aucun articles 
    @elseif(1 == count($posts)) {{ count($posts) }} article
    @else {{ count($posts) }} articles
    @endif @endsection

@section('css')
    @parent
    <link href="{{ mix('modules/post/css/app.css') }}" rel="stylesheet">
@stop

@section('content')

    @include('themes.'.config('prototype.theme').'.partials.header.page-title')

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
                                    @can('edit', $post)
                                        <button type="button" class="btn btn-sm btn-infos">
                                        <a href="{{ route('voyager.posts.edit', ['id' => $post->id]) }}">Editer</a>
                                        </button>
                                    @endcan
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

@section('scripts')
    @parent
    <script src="{{ mix('modules/post/js/app.js') }}" defer></script>
@stop