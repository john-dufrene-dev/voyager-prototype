<div id="post-component" class="container">

    <post-component 
        link="{{ route('articles.category', [$post->category->translate()->slug]) }}"
        category="{{ $post->category->translate()->name }}"
        body="{{ $post->translate()->body }}"
        image="{{ $post->image() }}">
    </post-component>

</div>