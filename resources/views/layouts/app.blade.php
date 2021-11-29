@inject('SPIDAuth', 'SPIDAuth')

    <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SPIDAuth') }}</title>

    <!-- Styles -->
    @stack('styles')
    @stack('css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app" class="flex-center position-ref full-height">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <ul class="navbar-nav mr-auto">
                <li class="nav-link"><a href="{{ url('/') }}">Home</a></li>
                @if ($SPIDAuth->isAuthenticated())
                    <li class="nav-link"><a href="{{ route('spid-auth_logout') }}">Logout</a></li>
            @else
                <!-- <li class="nav-link"><a href="{{ route('spid-auth_login') }}">Login</a></li> -->
            @endif
            <!-- <li class="nav-link"><a href="{{ route('private') }}">Private area</a></li> -->
            </ul>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.0-rc.2/jquery-ui.min.js" integrity="sha256-RQLbEU539dpygNMsBGZlplus6CkitaLy0btTCHcULpI=" crossorigin="anonymous"></script>
@yield('js')
@stack('scripts')
</body>
</html>
