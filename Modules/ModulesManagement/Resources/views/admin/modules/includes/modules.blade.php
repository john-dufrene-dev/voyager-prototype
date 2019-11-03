<table id="dataTable" class="table table-hover">
    <thead>

        <tr>
            <th>{{ __('modules.modules.name_module') }}</th>
            <th>{{ __('modules.modules.statut_module') }}</th>
            <th>{{ __('modules.modules.module_author') }}</th>
            <th>{{ __('modules.modules.module_version') }}</th>
            <th>{{ __('modules.modules.module_description_2') }}</th>
            <th>{{ __('modules.modules.module_theme') }}</th>
            <th class="actions">Actions</th>
        </tr>

    </thead>
    <tbody> 

            @foreach($modules as $module)
            <tr>
                <td><code> {{ $module->get('name')}} </code></td>
                <td> 
                    @if ( Module::find($module->get('name'))->isEnabled() ) <i class="voyager-check"></i>
                    @else <i class="voyager-x"></i> @endif
                </td>
                <td>@if($module->get('author')) {{ $module->get('author')}}
                        @else {{ __('modules.modules.no_author') }} @endif</td>
                <td>@if($module->get('version')) {{ $module->get('version') }}
                        @else 1.0 @endif</td>
                <td>@if($module->get('version')) {{ Str::limit($module->get('description'), 60) }}
                    @else {{ __('modules.modules.no_description') }} @endif</td>
                <td>@if ( $module->get('theme') && $module->get('theme') != 'admin' ) {{ $module->get('theme') }}
                    @elseif ( $module->get('theme') && $module->get('theme') == 'admin' ) 
                    {{ __('modules.modules.admin_theme') }}
                    @else {{ __('modules.modules.no_theme') }} @endif</td>
                <td class="no-sort no-click">
                    <form action="{{ route('modules.post') }}" class="cmd_form" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="args" autofocus class="form-control" value="{{ $module->get('name')}}">
                        <button type="submit" class="btn 
                            @if ( Module::find($module->get('name'))->isDisabled() )  btn-success
                            @else btn-danger @endif pull-right delete-confirm"> 
                            @if ( Module::find($module->get('name'))->isDisabled() ) 
                            {{ __('modules.modules.module_active') }}
                            @else {{ __('modules.modules.module_disable') }} @endif</button>
                        <input type="hidden" name="command" id="hidden_cmd" value="
                        @if ( Module::find($module->get('name'))->isDisabled() ) module:enable
                        @else module:disable @endif">
                    </form>
                </td>
            </tr>
            @endforeach

    </tbody>
</table>