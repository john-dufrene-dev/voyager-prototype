<div id="page-title" class="container mt-4">
    <h1 class="text-center">@yield('page_title')</h1>
</div>

@if (View::hasSection('page_subtitle'))
    <div id="page-subtitle" @if (View::hasSection('page_banner'))
        style="background-attachment:fixed;background-repeat:no-repeat;
        background-image: url(@yield('page_banner'))"@endif
        class="@yield('page_fluid') text-center mt-4">
        <div class="container mt-4"> 
            @yield('page_subtitle')
        </div>
    </div>
@endif

{{-- @include('voyager-frontend::partials.breadcrumbs') --}}