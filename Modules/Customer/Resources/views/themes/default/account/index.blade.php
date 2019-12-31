@extends(Theme::use().'layouts.default')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mon compte</div>

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

                    You are logged in!
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
