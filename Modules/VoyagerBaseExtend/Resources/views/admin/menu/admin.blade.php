<ol class="dd-list">

@foreach ($items as $item)

    <li class="dd-item" data-id="{{ $item->id }}">
        <div class="pull-right item_actions">
            <div class="btn btn-sm btn-danger pull-right delete" data-id="{{ $item->id }}">
                <i class="voyager-trash"></i> {{ __('generic.delete') }}
            </div>
            @if($item->menu->name != 'admin')
            <div class="active-item-ajax btn btn-sm @if($item->active_item == 1) btn-success 
                @else btn-danger @endif"
                data-id="{{ $item->id }}"
                data-active_item="{{ $item->active_item }}">
                <i class="@if($item->active_item == 1) voyager-check @else voyager-x @endif"></i>
            </div>
            @endif
            <div class="btn btn-sm btn-primary pull-right edit"
                data-id="{{ $item->id }}"
                data-title="{{ $item->title }}"
                data-url="{{ $item->url }}"
                data-target="{{ $item->target }}"
                data-link_to_module="{{ $item->link_to_module }}"
                data-active_item="{{ $item->active_item }}"
                data-icon_class="{{ $item->icon_class }}"
                data-color="{{ $item->color }}"
                data-route="{{ $item->route }}"
                data-parameters="{{ json_encode($item->parameters) }}"
            >
                <i class="voyager-edit"></i> {{ __('generic.edit') }}
            </div>
        </div>
        <div class="dd-handle">
            @if($options->isModelTranslatable)
                @include('voyager::multilingual.input-hidden', [
                    'isModelTranslatable' => true,
                    '_field_name'         => 'title'.$item->id,
                    '_field_trans'        => json_encode($item->getTranslationsOf('title'))
                ])
            @endif
            <span>{{ $item->title }}</span> <small class="url">{{ $item->link() }}</small>
        </div>
        @if(!$item->children->isEmpty())
            @include('voyagerbaseextend::admin.menu.admin', ['items' => $item->children])
        @endif
    </li>

@endforeach

</ol>
