<table id="dataTable" class="table table-hover">
    <thead>

        <tr>
            <th>{{ __('modulesmanagement::modules.name_module') }}</th>
            <th>{{ __('modulesmanagement::modules.statut_module') }}</th>
            <th>Auteur du module</th>
            <th>Versions du module</th>
            <th>Description du module</th>
            <th>Theme du module</th>
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
                        @else Pas d'auteur @endif</td>
                <td>@if($module->version) {{ $module->version }}
                        @else 1.0 @endif</td>
                <td>@if($module->description) {{ str_limit($module->description, 60) }}
                    @else Pas de description pour ce module @endif</td>
                <td>@if ( $module->theme && $module->theme != 'admin' ) {{ $module->theme }}
                    @elseif ( $module->theme && $module->theme == 'admin' ) Theme admin prédéfini
                    @else Pas de theme prédéfini pour ce module @endif</td>
                <td class="no-sort no-click">
                    <form action="{{ route('modules.post') }}" class="cmd_form" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="args" autofocus class="form-control" value="{{ $module->name }}">
                        <button type="submit" class="btn 
                            @if ( Module::find($module->name)->disabled() )  btn-success
                            @else btn-danger @endif pull-right delete-confirm"> 
                            @if ( Module::find($module->name)->disabled() ) {{ __('modulesmanagement::modules.module_active') }}
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