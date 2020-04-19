<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}" ></script>
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}" ></script>
    <script src="{{ asset('js/jquery-easing/jquery.easing.min.js') }}" ></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}" ></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body dir="rtl" >
    <div id="app">


                <div class="container-full">
                    <x-nav></x-nav>

                    <div class="row">

                        <div class="col-2">

                            <x-side></x-side>
                        </div>


                        <div class="col-10">


                                @yield('content')


                        </div>

                    </div>

                </div>



        </div>


       @yield('javascript')
</body>
</html>
