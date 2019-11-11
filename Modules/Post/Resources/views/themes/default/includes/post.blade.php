<div id="post-component" class="container">

    <post-component link="@if( true == verify_trans() ) 
    {{ $post->translate()->slug }} @else {{$post->slug}}@endif "></post-component>

</div>