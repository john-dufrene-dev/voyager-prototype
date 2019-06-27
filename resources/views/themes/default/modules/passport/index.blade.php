@extends('themes.'.config('prototype.theme').'./layouts/default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <passport-clients></passport-clients>
        <passport-authorized-clients></passport-authorized-clients>
        <passport-personal-access-tokens></passport-personal-access-tokens>

    </div>
</div>
@endsection
