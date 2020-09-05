<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


 	@include ('shurjopayment.partials.css')
</head>
   <body class="app sidebar-mini rtl">
        @include ('shurjopayment.partials.header1')

        <!-- Navbar-->
        @include ('shurjopayment.partials.sidebar')
        <main class="app-content">
            @include ('shurjopayment.partials.massage')
            @yield('content')

        </main>

        @include ('shurjopayment.partials.js.script')
        @yield('script')

    </body>
</html>
