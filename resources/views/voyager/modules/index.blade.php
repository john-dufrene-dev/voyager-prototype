@extends('voyager::master')

@section('css')

    @include('voyager.modules.includes.styles')

@stop

@section('page_header')
    <h1 class="page-title">
        <i class="voyager-hook"></i>
        {{-- <p> {{ __('voyager::generic.modules') }}</p>
        <span class="page-description">{{ __('voyager::compass.welcome') }}</span> --}}
    </h1>
@stop

@section('content')

    <div id="gradient_bg"></div>

    <div class="container-fluid">
        @include('voyager::alerts')
    </div>

    <div class="page-content compass container-fluid">
        <ul class="nav nav-tabs">
            <li @if(empty($active_tab) || $active_tab == 'list'){!! 'class="active"' !!}@endif><a data-toggle="tab" href="#list"><i class="voyager-terminal"></i> {{ __('voyager::compass.commands.title') }}</a></li>
            <li @if($active_tab == 'commands'){!! 'class="active"' !!}@endif><a data-toggle="tab" href="#commands"><i class="voyager-terminal"></i> {{ __('voyager::compass.commands.title') }}</a></li>
        </ul>

        <div class="tab-content">

            <div id="list" class="tab-pane fade in @if($active_tab == 'list'){!! 'active' !!}@endif">
                @include('voyager.modules.includes.list')
            </div>

            <div id="commands" class="tab-pane fade in @if($active_tab == 'commands'){!! 'active' !!}@endif">
                <h3><i class="voyager-terminal"></i> {{ __('voyager::compass.commands.title') }} <small>{{ __('voyager::compass.commands.text') }}</small></h3>
                <div id="command_lists">
                    @include('voyager.modules.includes.commands')
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
    <!-- JS for commands -->
    <script>

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
