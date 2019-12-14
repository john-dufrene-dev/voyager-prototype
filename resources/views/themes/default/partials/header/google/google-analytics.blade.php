@if (cache_setting('site.google_analytics_tracking_id'))
    <!-- Google Analytics (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ cache_setting('site.google_analytics_tracking_id') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ cache_setting('site.google_analytics_tracking_id') }}');
    </script>
@endif