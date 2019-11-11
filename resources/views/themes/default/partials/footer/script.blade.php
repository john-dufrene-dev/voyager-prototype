<!-- Scripts -->
@section('scripts')

    <script src="{{ mix('js/dependencies.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/vue-i18n-locales.generated.js') }}"></script>

    @if ( session('flash_toaster') )
        <script>
            $(document).ready(function(){
                $('.toast').toast('show');
            });
        </script>
    @endif

@show