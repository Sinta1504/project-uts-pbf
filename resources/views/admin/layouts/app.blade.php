<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.partials.head')
</head>
<body>
    <!-- BEGIN #app -->
    <div id="app" class="app @yield('app_class')">
        @if (! View::hasSection('hide_nav'))
            @include('admin.partials.header')
            @include('admin.partials.sidebar')
        @endif

        @yield('content')

        @include('admin.partials.footer')
    </div>
    <!-- END #app -->

    @include('admin.partials.scripts')
</body>
</html>