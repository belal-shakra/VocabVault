<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/tab-logo.png') }}">

        {{-- CDN --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">



        <title>@yield('tab-title')</title>
    </head>
    <body>


        @if (Auth::check())
            @include('parts.header')
        @endif


        @yield('content')


        @include('parts.footer')



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/b23f87e5ba.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>
