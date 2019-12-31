@extends(Theme::use().'layouts.default')

@section('css')
    @parent
@stop

@section('content')
<div class="container py-4">

    <breadcrumb-component breadcrumb='@json($breadcrumb)'></breadcrumb-component>
    <page-title-component title="{{ __('auth.login') }}"></page-title-component>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('auth.login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login.post') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <b-toast 
                                        visible id="email-error" 
                                        variant="danger"
                                        title="{{ __('json.validation_errors') }}" 
                                        auto-hide-delay="4000" solid>
                                        {{ $message }}
                                    </b-toast>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <b-toast 
                                        visible id="password-error" 
                                        variant="danger"
                                        title="{{ __('json.validation_errors') }}" 
                                        auto-hide-delay="4000" solid>
                                        {{ $message }}
                                    </b-toast>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-outline-prototype">
                                    {{ __('auth.login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('modules.auth.Forgot your password ?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <register-link-component></register-link-component>
        </div>
        
    </div>
</div>
@endsection

@section('scripts')
    @parent
    <script src="{{ mix('modules/customer/js/app.js') }}"></script>
@stop