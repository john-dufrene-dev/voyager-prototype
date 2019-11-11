<div class="container breadcrumbs-bg">

    <ul class="breadcrumb">

        <li class="breadcrumb-item">
            <a href="{{ route('home.index') }}">{{ __('seo.homepage.homepage') }}</a>
        </li>

        <li class="breadcrumb-item">
            <a href="{{ route('articles.index') }}">{{ __('seo.articles.my-posts') }}</a>
        </li>

        @if($posts->total()  > 0) 
            @if(true == verify_trans() ) 
            <li class="breadcrumb-item active" aria-current="page"> {{ $posts[0]->category->translate()->slug }} </li>
            @else
            <li class="breadcrumb-item active" aria-current="page"> {{ $posts[0]->category->slug }} </li>
            @endif 
        @endif
        
    </ul>
    
</div>