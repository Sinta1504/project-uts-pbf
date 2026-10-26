<!DOCTYPE html>
<html lang="en">
<head>
    @include('fitness.partials.head')
</head>
<body>
    @include('fitness.partials.header')

    @yield('content')

    @include('fitness.partials.footer')

    @include('fitness.partials.scripts')
</body>
</html>