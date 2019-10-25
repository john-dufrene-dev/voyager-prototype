@extends('voyager::master')

@section('css')

    @include('voyager::compass.includes.styles')
    <link href="{{ mix('modules/logviewer/css/app.css') }}" rel="stylesheet" type="text/css">

@stop

@section('page_header')
    <h1 class="page-title">
        <i class="voyager-logbook"></i>
        <p> {{__('modules.logs.logs_server')}} </p>
        <span class="page-description"> {{__('modules.logs.logs_server_description')}} </span>
    </h1>
@stop

@section('content')

    <div id="gradient_bg"></div>

    <div class="container-fluid">
        @include('voyager::alerts')
    </div>

    <div class="page-content compass container-fluid">
        <ul class="nav nav-tabs">
            <li @if(empty($active_tab) || (isset($active_tab) && $active_tab == 'logs')){!! 'class="active"' !!}@endif><a data-toggle="tab" href="#logs"><i class="voyager-logbook"></i> {{ __('compass.logs.title') }}</a></li>
        </ul>

        <div class="tab-content">

        <div id="logs" class="tab-pane fade in @if($active_tab == 'logs'){!! 'active' !!}@endif">
            <div class="row">

                @include('voyager::compass.includes.logs')

            </div>
        </div>
        </div>

    </div>

@stop
@section('javascript')
    <script>
        $('document').ready(function(){
            $('.collapse-head').click(function(){
                var collapseContainer = $(this).parent();
                if(collapseContainer.find('.collapse-content').hasClass('in')){
                    collapseContainer.find('.voyager-angle-up').fadeOut('fast');
                    collapseContainer.find('.voyager-angle-down').fadeIn('slow');
                } else {
                    collapseContainer.find('.voyager-angle-down').fadeOut('fast');
                    collapseContainer.find('.voyager-angle-up').fadeIn('slow');
                }
            });
        });
    </script>

    <!-- JS for logs -->
    <script>
      $(document).ready(function () {
        $('.table-container tr').on('click', function () {
          $('#' + $(this).data('display')).toggle();
        });
        $('#table-log').DataTable({
          "order": [1, 'desc'],
          "stateSave": true,
          "language": {!! json_encode(__('datatable')) !!},
          "stateSaveCallback": function (settings, data) {
            window.localStorage.setItem("datatable", JSON.stringify(data));
          },
          "stateLoadCallback": function (settings) {
            var data = JSON.parse(window.localStorage.getItem("datatable"));
            if (data) data.start = 0;
            return data;
          }
        });

        $('#delete-log, #delete-all-log').click(function () {
          return confirm('{{ __('generic.are_you_sure') }}');
        });
      });
    </script>
    <script type="application/javascript" src="{{ mix('modules/logviewer/js/app.js') }}"></script>
@stop
