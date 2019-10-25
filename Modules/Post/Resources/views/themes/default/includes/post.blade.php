<div id="post-component" class="container">

    <post-component 
        link="@if( true == config('voyager.multilingual.enabled')) {{ route('articles.category', [ $post->category->translate()->slug ]) }} 
        @else {{ route('articles.category', [ $post->category->slug ]) }}
        @endif "
        category="@if( true == config('voyager.multilingual.enabled')) {{ $post->category->translate()->name }}
        @else {{ $post->category->name }} @endif"
        body="@if( true == config('voyager.multilingual.enabled')) {{ $post->translate()->body }}
        @else {{ $post->body }} @endif"
        image="{{ $post->img() }}">
    </post-component>

</div>