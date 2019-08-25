@foreach($items as $item)
    @if( $item->active_item == 1 )
        @if(!empty($item->link_to_module))
            @if(Module::find($item->link_to_module)->enabled())
                @php ($hasChildren = count($item->children) > 0)
                
                <li>
                    <a target="{{ $item->translate()->target }}" href="{{ $item->link() }}" 
                    @if($item->children->count()) @endif class="nav-link 
                    @if($item->children->count()) dropdown-toggle @endif
                    @if(url($item->link()) == url()->current()) active @endif ">{{ $item->translate()->title }}
                    </a>
                    @if ($hasChildren)
                        <ul>
                            @include(Theme::use().'partials.navbar.menus._left', 
                            ['items' => $item->translate()->children])
                        </ul>
                    @endif
                </li>
            @endif
        @else 
            @if(empty($item->link_to_module))
                @php ($hasChildren = count($item->children) > 0)
                <li>
                    <a target="{{ $item->target }}" href="{{ $item->link() }}" 
                    @if($item->children->count()) @endif class="nav-link 
                    @if($item->children->count()) dropdown-toggle @endif
                    @if(url($item->link()) == url()->current()) active @endif ">{{ $item->title }}
                    </a>
                    @if ($hasChildren)
                        <ul>
                            @include(Theme::use().'partials.navbar.menus._left', 
                            ['items' => $item->children])
                        </ul>
                    @endif
                </li>
            @endif
        @endif
    @endif
@endforeach