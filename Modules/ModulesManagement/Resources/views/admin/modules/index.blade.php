@extends('voyager::master')

@section('css')

    @include('modulesmanagement::admin.modules.includes.styles')

@stop

@section('page_header')
    <h1 class="page-title"><i class="voyager-star-two"></i> {{ __('modulesmanagement::modules.module_management') }} </h1>
@stop

@section('page_header_actions')

@stop

@section('content')

    <div class="page-content compass container-fluid">

        <div class="tab-content">

            <div id="commands" class="tab-pane fade in active">
                <h3><i class="voyager-terminal"></i> {{ __('modulesmanagement::modules.module') }} <small> {{ __('modulesmanagement::modules.module_description') }} </small></h3>
                <div id="command_lists">
                    @if($artisan_output)
                        <pre>
                            <i class="close-output voyager-x">{{ __('voyager::compass.commands.clear_output') }}</i><span class="art_out">{{ __('voyager::compass.commands.command_output') }}:</span>{{ trim(trim($artisan_output,'"')) }}
                        </pre>
                    @endif
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <table id="dataTable" class="table table-hover">
                            <thead>

                                <tr>
                                    <th>{{ __('modulesmanagement::modules.name_module') }}</th>
                                    <th>{{ __('modulesmanagement::modules.statut_module') }}</th>
                                    <th class="actions">Actions</th>
                                </tr>

                            </thead>
                            <tbody> 

                                @foreach($modules as $module)
                                <tr>
                                    <td><code> {{ $module->name }} </code></td>
                                    <td> 
                                        @if ( Module::find($module->name)->enabled() ) <i class="voyager-check"></i> {{ __('modulesmanagement::modules.module_st_on') }}
                                        @else <i class="voyager-x"></i> {{ __('modulesmanagement::modules.module_st_off') }} @endif
                                    </td>
                                    <td class="no-sort no-click">
                                        <form action="{{ route('modules.post') }}" class="cmd_form" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="args" autofocus class="form-control" value="{{ $module->name }}">
                                            <input type="submit" class="btn 
                                                @if ( Module::find($module->name)->disabled() )  btn-success
                                                @else btn-danger @endif pull-right delete-confirm"
                                            value="@if ( Module::find($module->name)->disabled() )  {{ __('modulesmanagement::modules.module_active') }}
                                            @else {{ __('modulesmanagement::modules.module_disable') }} @endif">
                                            <input type="hidden" name="command" id="hidden_cmd" value="@if ( Module::find($module->name)->disabled() ) module:enable
                                            @else module:disable @endif">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> 
@stop

@section('javascript')
    <!-- JS for commands -->
    <script>

        $(document).ready(function () {
            $('#dataTable').DataTable({ "order": [] });
        });

        $(document).ready(function(){
            $('.command').click(function(){
                $(this).find('.cmd_form').slideDown();
                $(this).addClass('more_args');
                $(this).find('input[type="text"]').focus();
            });

            $('.close-output').click(function(){
                $('#commands pre').slideUp();
            });
        });

    </script>
@stop
