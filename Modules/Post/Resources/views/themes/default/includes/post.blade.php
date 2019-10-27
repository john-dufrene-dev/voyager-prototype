<div id="post-component" class="container">

    <post-component link="@if( true == config('voyager.multilingual.enabled')) 
    {{ $post->translate()->slug }} @else {{$post->slug}}@endif "></post-component>

</div>