<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
                        @if (Auth::User()->is_admin==0)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admit.index',[Auth::User()->id]) }}">{{ __('Admit Card') }}</a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact_us') }}">{{ __('Contact Us') }}</a>
                        </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('user_credential') }}">
                                       
                                        {{ __('Login Info') }}
                                    </a>
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
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                    <div class="card">
                        
                        <div class="card-header">{{ __('Admit Card') }} </div>
                        <span class="text-right" id="btnprint"><button id="" type="button" class="btn btn-light" >Print</button></span>
                       <div id="print_Div" class="border border-dark">
                        <div class="card-body">
                            <div class="row">
                                
                                <div class="col-3">
                                    <a class="navbar-brand" href="{{ url('/') }}">
                                        {{-- {{ config('app.name', 'Laravel') }} --}}
                                        <img src="{{ asset('img/logo/bcalogo.png') }}" alt="Logo" style="width:70px;">
                                    </a>
                                </div>
                                <div class="col-6 text-center">
                                    <h5>BCA Britti-{{ date('Y') }}</h5>
                                    <p><strong>Admit card</strong></p>
                                </div>
                                <div class="col-3 text-center">
                                    {{-- <div class="border border-dark">
                                        <a class="navbar-brand" href="{{ url('/') }}">photo
                                            {{ config('app.name', 'Laravel') }}
                                            <img src="{{ asset('img/logo/bcalogo.png') }}" alt="Logo" style="max-width:70px; height:150px" class="p-1">
                                        </a>
                                    </div> --}}
                                </div>
                                
                                <div class="col-12 text-center">
                                    <table class="text-right" style="margin-left: auto;
                                    margin-right: auto;">
                                        <tr class="p-3">
                                            <th class="pr-3">Exam Roll :</th>
                                            <td>{{ $student->user_id }}</td>
    
                                        </tr>
                                        <tr>
                                            <th class="pr-3">Student's Name :</th>
                                            <td>{{ $student->name }}</td>
                                        </tr>
                                        <tr>
                                            <th class="pr-3">Father's Name :</th>
                                            <td>{{ $student->fathername }}</td>
                                        </tr>
                                        <tr>
                                            <th class="pr-3">Mother's Name :</th>
                                            <td>{{ $student->mothername }}</td>
                                        </tr>
                                        <tr>
                                            <th class="pr-3">Class :</th>
                                            <td>{{ $student->classname }}</td>
                                        </tr>
                                    </table>
                                    {{-- <ul class="list-group">
                                        <li class="list-group-item" style="border: 0 none"><strong class="mr-1 text-right">Exam Roll :</strong></li>
                                        <li class="list-group-item" style="border: 0 none"><strong class="mr-1"> :</strong>{{ $student->name }}</li>
                                        <li class="list-group-item" style="border: 0 none"><strong class="mr-1">Father's Name :</strong>{{ $student->fathername }}</li>
                                        <li class="list-group-item" style="border: 0 none"><strong class="mr-1">Mother's Name:</strong>{{ $student->mothername }}</li>
                                        <li class="list-group-item" style="border: 0 none"><strong class="mr-1">Class :</strong>{{ $student->classname }}</li>
                                      </ul> --}}
                                </div>
                                <div class="col-12 text-right">
                                    <a class="navbar-brand" href="">
                                        {{-- {{ config('app.name', 'Laravel') }} --}}
                                        <img src="{{ asset('img/sign/sign.png') }}" alt="Logo" style="width:70px;">
                                    </a>
                                    <p>Exam Controller</p>
                                </div>
                                <div class="col-12 text-left">
                                    <ol>
                                        <li>Admit card must be shown at the time of receiving the scholarship</li>
                                        <li>Admit card must be shown for any problems related to the scholarship</li>
                                    </ol>
                                </div>
                            </div>
                        </div>   
                    </div>   
                </div>
            </div>
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
</body>
</html>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('js/printThis.js') }} "></script>
<script>
    $(document).ready(function () {
       $('#btnprint').click(function (e) { 
           e.preventDefault();
           $('#print_Div').printThis({
            debug: false,               // show the iframe for debugging
            importCSS: true,            // import parent page css
            importStyle: true,         // import style tags
            printContainer: true,       // print outer container/$.selector
            loadCSS: "",                // path to additional css file - use an array [] for multiple
            pageTitle: "",              // add title to print page
            removeInline: false,        // remove inline styles from print elements
            removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
            printDelay: 533,            // variable print delay
            header: null,               // prefix to html
            footer: null,               // postfix to html
            base: false,                // preserve the BASE tag or accept a string for the URL
            formValues: true,           // preserve input/form values
            canvas: false,              // copy canvas content
            doctypeString: '...',       // enter a different doctype for older markup
            removeScripts: false,       // remove script tags from print content
            copyTagClasses: false,      // copy classes from the html & body tag
            beforePrintEvent: null,     // function for printEvent in iframe
            beforePrint: null,          // function called before iframe is filled
            afterPrint: null            // function called before iframe is removed
        });
           
       });
    });
    
</script>
{{-- @endsection --}}
