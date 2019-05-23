@if(!isset($innerLoop))
    <ul class="navbar-nav ml-auto">
@else
    <ul class="dropdown-menu">
@endif

@php

    if (Voyager::translatable($items)) {
        $items = $items->load('translations');
    }

@endphp

    @foreach ($items as $item)

        @php
            $originalItem = $item;
            if (Voyager::translatable($item)) {
                $item = $item->translate($options->locale);
            }

            $listItemClass = null;
            $linkAttributes =  null;
            $dropDown = null;
            $active = null;

            if(url($item->link()) == url()->current()) {
                $active = 'active ';
            }

            if(!$originalItem->children->isEmpty()) {
                $linkAttributes =  'data-toggle="dropdown"';
                $dropDown       = 'dropdown-toggle';

                if(url($item->link()) == url()->current()){
                    $listItemClass = 'dropdown active';
                }else{
                    $listItemClass = 'dropdown';
                }
            }
        @endphp

        @if(!isset($innerLoop))
        <li class="nav-item dropdown">
            <a href="{{ url($item->link()) }}" class="nav-link {{ $dropDown }} {{ $active }}" target="{{ $item->target }}" {!! $linkAttributes ?? '' !!}>{{ $item->title }}</a>
            @if(!$originalItem->children->isEmpty())
                @include('blocks.navbar.menus.header', ['items' => $originalItem->children, 'options' => $options, 'innerLoop' => true])
            @endif
        </li>
        @else
        <li class="nav-item">
            <a href="{{ url($item->link()) }}" class="nav-link {{ $dropDown }} {{ $active }}" target="{{ $item->target }}" {!! $linkAttributes ?? '' !!}>{{ $item->title }}</a>
        </li>
        @endif

    @endforeach
</ul>
