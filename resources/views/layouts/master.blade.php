<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SHefaa</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('layouts.head')
</head>

<body>
    <!-- main-content -->
    <div class="main-content app-content">
        @include('layouts.header')
        <!-- container -->
            @yield('content')
            @include('layouts.footer')
            @include('layouts.script')
</body>

</html>