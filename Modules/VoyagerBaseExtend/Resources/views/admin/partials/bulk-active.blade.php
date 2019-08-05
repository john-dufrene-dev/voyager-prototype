<a class="btn btn-success" id="bulk_active_btn" 
data-model-name="{{$dataType->model_name}}"
data-model-statut="1"
data-name="{{$dataType->name}}"
data-translation-name="{{ __('generic.nothink_to_enable') }}"
data-translation-name-success="{{ __('generic.update_status_success') }}">
    <i class="voyager-check"></i> <span>{{ __('generic.active_selection') }}</span>
</a>

<a class="btn btn-danger" id="bulk_disable_btn"
data-model-name="{{$dataType->model_name}}"
data-model-statut="0"
data-name="{{$dataType->name}}"
data-translation-name="{{ __('generic.nothink_to_disable') }}"
data-translation-name-success="{{ __('generic.update_status_danger') }}">
    <i class="voyager-x"></i> <span>{{ __('generic.disable_selection') }}</span>
</a>
