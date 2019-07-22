<div class="container">
    <h1>@yield('page_title')</h1>
    @if (View::hasSection('page_subtitle'))
        <p><pre>@yield('page_subtitle')</pre></p>
    @endif
</div>

{{-- @include('voyager-frontend::partials.breadcrumbs') --}}