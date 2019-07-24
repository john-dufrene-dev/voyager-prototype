{{-- Ne supporte que deux niveaux d'imbrigations --}}
@foreach($items as $item)
    @php ($hasChildren = count($item->children) > 0)
    <li>
        <a target="{{ $item->target }}" href="{{ url($item->url) }}" 
        @if($item->children->count()) @endif class="nav-link 
        @if($item->children->count()) dropdown-toggle @endif
        @if(url($item->link()) == url()->current()) active @endif ">{{ $item->title }}
        </a>
        @if ($hasChildren)
            <ul>
                @include('themes.'.config('prototype.theme').'.partials.navbar.menus._left', ['items' => $item->children])
            </ul>
        @endif
    </li>
@endforeach