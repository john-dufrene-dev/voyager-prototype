@extends(Theme::use().'layouts.default')

@section('css')
    @parent
@stop

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <b-toast 
                            visible id="status-success" 
                            variant="success"
                            title="{{ __('generic.sweet_success') }}"
                            auto-hide-delay="4000" solid>
                            {{ session('status') }}
                        </b-toast>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-prototype">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
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