<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ich Bin Da</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/cleave.min.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/fontawesome-all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/iofrm-style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/iofrm-theme18.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/iofrm-theme25.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css">

</head>
<body>
    @include('inc.error-display')
    <div id="app">
        @include('inc.navbar')

        <main class="py-4">
            <div style="min-height: 800px">
                @yield('content')
            </div>
            
        </main>
    </div>
    @include('inc.footer')
</body>
</html>
