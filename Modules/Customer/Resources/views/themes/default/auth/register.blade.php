@extends(Theme::use().'layouts.default')

@section('css')
    @parent
@stop

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('auth.register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <b-toast 
                                        visible id="name-error" 
                                        variant="danger"
                                        title="{{ __('json.validation_errors') }}" 
                                        auto-hide-delay="4000" solid>
                                        {{ $message }}
                                    </b-toast>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-prototype">
                                    {{ __('auth.register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('auth.login') }}</div>
                <div class="card-body">
                    <h4>{{ __('modules.auth.Connect to your account') }}</h4>
                    <p>{{ __('modules.auth.Infos connexion') }}.</p>
                    <a href="{{ route('login') }}" class="btn btn-outline-prototype">{{ __('auth.login') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    @parent
    <script src="{{ mix('modules/customer/js/app.js') }}"></script>
@stop