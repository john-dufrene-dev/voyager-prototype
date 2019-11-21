<!-- Scripts -->
@section('scripts')

    <script src="{{ mix('js/default.min.js') }}"></script>

    @if ( session('flash_toaster') )
        <script>
            $(document).ready(function(){
                $('.toast').toast('show');
            });
        </script>
    @endif

@show