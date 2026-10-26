<meta charset="utf-8">
<title>@yield('title', 'Studio | Dashboard')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<!-- ================== BEGIN core-css ================== -->
<link href="{{ asset('studioadmin/assets/css/vendor.min.css') }}" rel="stylesheet">
<link href="{{ asset('studioadmin/assets/css/app.min.css') }}" rel="stylesheet">
<!-- ================== END core-css ================== -->

@stack('styles')