@extends(Theme::use().'layouts.default')

@section('css')
    @parent
@stop

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <b-toast 
                            visible id="resent-success" 
                            variant="success"
                            title="{{ __('generic.sweet_success') }}" 
                            auto-hide-delay="4000" solid>
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </b-toast>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
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