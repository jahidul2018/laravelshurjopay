<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    <img src="{{ asset('img/logo/bcalogo.png') }}" alt="Logo" style="width:70px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Contact Us') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('payment.index') }}">{{ __('Payment') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('exam.index') }}">{{ __('Exam') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Result') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admit.index') }}">{{ __('Admit Card') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('payment.index') }}">{{ __('Contact Us') }}</a>
                        </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
            <div class="container">
                <div class="row justify-content-center">
            <div class="col-md-12 mt-5">
                <div class="jumbotron" style="margin-bottom:0">
                   <div class="row">
                    <div class="col-md-6">
                        <h5>পরীক্ষা নিয়ন্ত্রক: </h5>
                        <p>01816819679</p>
                    </div>
                        <div class="col-md-6">
                            <h5>হেড অফিস:</h5>
                            <p>পূর্ব তেজতুরীবাজার (সরকারী বিজ্ঞান কলেজের বিপরীতে) <br> ফার্মগেট, তেজগাঁও, ঢাকা। <br>ফোন: 029121212</p>
                                
                            
                        </div>
                       <div class="col-md-6">
                        <h5>মোহাম্মদপুর অফিস:</h5>
                        <p>16/14, তাজমহলরোড, মোহাম্মদপুর, ঢাকা।<br>
                             ফোন: 029111505
                        
                       </div>
                       <div class="col-md-6">
                        <h5> আজিমপুর অফিস:</h5>
                        <p> 103, আজিমপুর রোড, আজিমপুর, ঢাকা।<br>
                            ফোন: 029665143</p>
                            
                        
                       </div>
                   </div>
                </div>
                       
                   </div>
                  </div>
            </div>
                </div>
            </div>
        </main>
    </div>
    
    {{-- @yield('script') --}}
</body>
</html>
