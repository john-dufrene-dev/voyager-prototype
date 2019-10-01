@extends('voyager::master')

@section('page_title', __('generic.config_home_page_title'))

@section('css')

    @include('voyager::compass.includes.styles')

@stop

@section('page_header')
    <h1 class="page-title">
        <i class="voyager-compass"></i>
        <p> {{ __('generic.config_home_page_title') }} </p>
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content read container-fluid">
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('voyager.config.pages.settings.home.post') }}" method="POST">
                    
                    {{ csrf_field() }}

                    <div class="col-md-8">
                        <div class="panel panel panel-bordered panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="icon wb-clipboard"></i> {{ __('generic.referer_seo') }}
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="meta_description">{{ __('generic.meta_description') }}</label>
                                    @include('voyager::multilingual.input-hidden', [
                                        '_field_name'  => 'PAGE_HOME_META_DESCRIPTION',
                                        '_field_trans' => get_field_translations(
                                            Cors::findModelCors('PAGE_HOME_META_DESCRIPTION'), 'cors_value')
                                    ])
                                    <textarea class="form-control" id="meta_description" placeholder="{{ __('generic.meta_descr_placeholder') }}"
                                    name="PAGE_HOME_META_DESCRIPTION">{{ Cors::findModelCors('PAGE_HOME_META_DESCRIPTION')->cors_value ?? '' }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="meta_keywords">{{ __('generic.meta_keywords') }}</label>
                                    @include('voyager::multilingual.input-hidden', [
                                        '_field_name'  => 'PAGE_HOME_META_KEYWORDS',
                                        '_field_trans' => get_field_translations(
                                            Cors::findModelCors('PAGE_HOME_META_KEYWORDS'), 'cors_value')
                                    ])
                                    <textarea class="form-control" id="meta_keywords" placeholder="{{ __('generic.meta_kews_placeholder') }}"
                                    name="PAGE_HOME_META_KEYWORDS">{{ Cors::findModelCors('PAGE_HOME_META_KEYWORDS')->cors_value ?? '' }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="meta_title">{{ __('generic.meta_title') }}</label>
                                    @include('voyager::multilingual.input-hidden', [
                                        '_field_name'  => 'PAGE_HOME_META_TITLE',
                                        '_field_trans' => get_field_translations(
                                            Cors::findModelCors('PAGE_HOME_META_TITLE'), 'cors_value')
                                    ])
                                    <input type="text" class="form-control" id="meta_title"
                                    name="PAGE_HOME_META_TITLE" placeholder="{{ __('generic.meta_title_placeholder') }}" 
                                    value="{{ Cors::findModelCors('PAGE_HOME_META_TITLE')->cors_value ?? '' }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="panel panel panel-bordered panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="icon wb-clipboard"></i> {{ __('generic.client_service') }}
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="number_service_client">{{ __('generic.number_service_client') }}</label>
                                    <input type="text" class="form-control" id="number_service_client" 
                                    name="SERVICE_CLIENT_NUMBER" 
                                    placeholder="{{ __('generic.number_service_client') }}" 
                                value="{{ Cors::get('SERVICE_CLIENT_NUMBER') }}">
                                </div>
                                <div class="form-group">
                                    <label>{{ __('generic.active_service_client') }}</label>
                                    <ul class="radio">
                                        <li style="width: 90px; padding:0;">
                                            <input type="radio" id="turn_on" name="SERVICE_CLIENT_ACTIVE" value="1"
                                            @if(Cors::get('SERVICE_CLIENT_ACTIVE') == 1) ? checked : '' @endif>
                                            <label for="turn_on">ON</label>
                                            <div class="check"></div>
                                        </li>
                                        <li style="width: 90px; padding:0;">
                                            <input type="radio" id="turn_off" name="SERVICE_CLIENT_ACTIVE" value="0"
                                            @if(Cors::get('SERVICE_CLIENT_ACTIVE') == 0) ? checked : '' @endif>
                                            <label for="turn_off">OFF</label>
                                            <div class="check"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right">
                            {{ __('generic.update_homepage') }}          
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        $('document').ready(function () {
            $('#slug').slugify();

            @if ($isModelTranslatable)
                $('.side-body').multilingual({"editing": true});
            @endif
        });
    </script>
@stop