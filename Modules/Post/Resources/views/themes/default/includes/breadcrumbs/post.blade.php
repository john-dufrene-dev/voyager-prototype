<div class="container breadcrumbs-bg">

    <ul class="breadcrumb">

        <li class="breadcrumb-item">
            <a href="{{ route('home.index') }}">{{ __('seo.homepage.homepage') }}</a>
        </li>

        <li class="breadcrumb-item">
            <a href="{{ route('articles.index') }}">{{ __('seo.articles.my-posts') }}</a>
        </li>

        <li class="breadcrumb-item">
            @php $cat_slug = (true == verify_trans() ) 
                ? $post->category->translate()->slug 
                : $post->category->slug  @endphp
            <a href="{{ route('articles.category', $cat_slug ) }}">
                @if( true == verify_trans() ) {{ $post->category->translate()->slug }} 
                @else {{ $post->category->slug }} @endif
            </a>
        </li>
        
        <li class="breadcrumb-item active" aria-current="page">
            @if( true == verify_trans() ) {{ $post->translate()->title }} 
            @else {{ $post->title }} @endif
        </li>

    </ul>
    
</div>