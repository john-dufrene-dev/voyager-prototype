<div class="container">
    <p>{!! $post->translate()->body !!}</p>
    <img src="{{Voyager::image($post->thumbnail('medium'))}}" />
</div>