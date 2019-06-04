{{-- Ne supporte que deux niveaux d'imbrigations --}}
<ul class="navbar-nav ml-auto">
    @foreach($items as $item)
        <li class="nav-item @if($item->children->count()) dropdown  @endif">
            <a target="{{ $item->target }}" href="{{ url($item->url) }}" 
            @if($item->children->count()) data-toggle="dropdown" @endif class="nav-link 
            @if($item->children->count()) dropdown-toggle @endif
            @if(url($item->link()) == url()->current()) active @endif ">{{ $item->title }}
            </a>
            @if($item->children->count()) 
                <ul role="menu" class="dropdown-menu">
                    @foreach($item->children as $subItem)
                        <li class="nav-item">
                            <a target="{{ $subItem->target }}" href="{{ url($subItem->url) }}"
                            class="nav-link @if(url($subItem->link()) == url()->current()) active @endif ">{{ $subItem->title }}</a>
                        </li>
                        @if(!$loop->last) <li class="divider"></li> @endif
                    @endforeach
                </ul>
            @endif
        </li>
        
    @endforeach
</ul>