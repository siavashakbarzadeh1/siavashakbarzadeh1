<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title_prefix', config('bootstrap-italia.title_prefix', ''))
        @yield('title', config('bootstrap-italia.title', '_CompanyName'))
        @yield('title_postfix', config('bootstrap-italia.title_postfix', ''))</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap-italia/dist/css/bootstrap-italia.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/guest.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap-italia-custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <style type="text/css">
        body {
            /*font-family: 'Nunito', sans-serif;*/
        }
        *:disabled {
            background: lightgrey;
        }
        .error {
            color:red;
        }
    </style>

    @yield('bootstrapitalia_css')

    <script>window.__PUBLIC_PATH__ = '{{ asset('vendor/bootstrap-italia/dist/fonts') }}'</script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    @yield('body')

    @yield('bootstrapitalia_js')
</body>
</html>
