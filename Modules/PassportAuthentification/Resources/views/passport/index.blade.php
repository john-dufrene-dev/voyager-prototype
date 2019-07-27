@extends('voyager::master')

@section('page_header')
    <h1 class="page-title">IN PROGRESS (passport)</h1>
@stop

@section('content')

    <div class="container-fluid">
        @include('voyager::alerts')
    </div>

    <div id="passport" class="container">
        <div class="row justify-content-center">

            <passport-clients></passport-clients>
            <passport-authorized-clients></passport-authorized-clients>
            <passport-personal-access-tokens></passport-personal-access-tokens>

        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ mix('modules/passportauth/js/app.js') }}" defer></script>
@endsection