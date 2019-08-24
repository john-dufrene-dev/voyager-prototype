<table id="dataTable" class="table table-hover">
    <thead>

        <tr>
            <th>{{ __('modulesmanagement::modules.name_module') }}</th>
            <th>{{ __('modulesmanagement::modules.statut_module') }}</th>
            <th>{{ __('modulesmanagement::modules.module_author') }}</th>
            <th>{{ __('modulesmanagement::modules.module_version') }}</th>
            <th>{{ __('modulesmanagement::modules.module_description_2') }}</th>
            <th>{{ __('modulesmanagement::modules.module_theme') }}</th>
            <th class="actions">Actions</th>
        </tr>

    </thead>
    <tbody> 

            @foreach($modules as $module)
            <tr>
                <td><code> {{ $module->name }} </code></td>
                <td> 
                    @if ( Module::find($module->name)->enabled() ) <i class="voyager-check"></i>
                    @else <i class="voyager-x"></i> @endif
                </td>
                <td>@if($module->author) {{ $module->author }}
                        @else {{ __('modulesmanagement::modules.no_author') }} @endif</td>
                <td>@if($module->version) {{ $module->version }}
                        @else 1.0 @endif</td>
                <td>@if($module->description) {{ str_limit($module->description, 60) }}
                    @else {{ __('modulesmanagement::modules.no_description') }} @endif</td>
                <td>@if ( $module->theme && $module->theme != 'admin' ) {{ $module->theme }}
                    @elseif ( $module->theme && $module->theme == 'admin' ) 
                    {{ __('modulesmanagement::modules.admin_theme') }}
                    @else {{ __('modulesmanagement::modules.no_theme') }} @endif</td>
                <td class="no-sort no-click">
                    <form action="{{ route('modules.post') }}" class="cmd_form" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="args" autofocus class="form-control" value="{{ $module->name }}">
                        <button type="submit" class="btn 
                            @if ( Module::find($module->name)->disabled() )  btn-success
                            @else btn-danger @endif pull-right delete-confirm"> 
                            @if ( Module::find($module->name)->disabled() ) 
                            {{ __('modulesmanagement::modules.module_active') }}
                            @else {{ __('modulesmanagement::modules.module_disable') }} @endif</button>
                        <input type="hidden" name="command" id="hidden_cmd" value="
                        @if ( Module::find($module->name)->disabled() ) module:enable
                        @else module:disable @endif">
                    </form>
                </td>
            </tr>
            @endforeach

    </tbody>
</table>