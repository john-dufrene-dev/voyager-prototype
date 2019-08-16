@extends('voyager::master')

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
                        <div class="table-responsive">

                            @include('modulesmanagement::admin.modules.includes.modules')
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> 
@stop

@section('css')

    @if(config('dashboard.data_tables.responsive'))
        <link rel="stylesheet" href="{{ voyager_asset('lib/css/responsive.dataTables.min.css') }}">
    @endif

    @include('modulesmanagement::admin.modules.includes.styles')

@stop

@section('javascript')

    @if(config('dashboard.data_tables.responsive'))
        <script src="{{ voyager_asset('lib/js/dataTables.responsive.min.js') }}"></script>
    @endif

    <script>

        $(document).ready(function() {

            $('#dataTable').DataTable({ "order": [] });

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
