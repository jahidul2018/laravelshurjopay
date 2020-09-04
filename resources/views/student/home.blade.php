{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    shurjoPayment Test !
                </div>

            </div>
        </div>
    </body>
</html> --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>

                <div class="card-body">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" style="max-height: 500px;"  src="{{ asset('img/carousel/1.jpg') }}" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" style="max-height: 500px;"  src="{{ asset('img/carousel/2.jpg') }}" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100"  style="max-height: 500px;" src="{{ asset('img/carousel/3.jpg') }}" alt="Third slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100"  style="max-height: 500px;" src="{{ asset('img/carousel/4.jpg') }}" alt="Third slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100"  style="max-height: 500px;" src="{{ asset('img/carousel/5.jpg') }}" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </div>
            </div>
        </div>
        <div class="col-md-12  mt-5">
            <div class="card">
                <div class="card-header bg-success"><strong>{{ __('Admin') }}</strong></div>
                <div class="card-body">
                    <p>‘বাংলাদেশ ক্যাডেট একাডেমি’ মানসম্পন্ন শিক্ষা বিস্তার, শিক্ষার্থীদের মেধার বিকাশ এবং প্রকৃত মেধা ও অর্জিত জ্ঞানের যথার্থ মূল্যায়নে বদ্ধ পরিকর। এ পরিপ্রেক্ষিতে সামাজিক   দায়বদ্ধতা থেকে আমরা প্রতি বছরই আয়োজন করে থাকি একটি অলাভজনক উদ্যোগ ‘BCA বৃত্তি পরীক্ষা ২০২০’। শুরু থেকেই সুনিয়ন্ত্রিত ও সুবিন্যস্ত কর্মপরিকল্পনা অনুযায়ী বৃত্তি পরীক্ষা আয়োজন ও সংবর্ধনা প্রদান উদযাপিত হয়ে আসছে। এ প্রতিযোগিতায় অংশগ্রহণের মাধ্যমে একজন শিক্ষার্থীর ওপর নিম্নলিখিত ইতিবাচক প্রভাব প্রতীয়মান হয়ঃ
                    </p>
                    <ul>
                        <li>বৃহৎ কলেবরে আয়োজিত এ প্রতিযোগিতায় অংশগ্রহণ করে শিক্ষার্থীরা সেরা স্কুলের শিক্ষার্থীদের সাথে প্রতিযোগিতায় অংশ নিতে পারে।</li>
                        <li> তীব্র প্রতিযোগিতামূলক এ পরীক্ষায় মেধা যাচাই এর যথেষ্ট সুযোগ রয়েছে।</li>
                        <li>বৃত্তি পরীক্ষায় সাফল্য লাভ করে শিক্ষার্থীদের মধ্যে আত্মবিশ্বাস বৃদ্ধি পায় যা ভবিষ্যতের জন্য পাথেয় হয়ে থাকে।</li>
                        <li>বৃত্তিপ্রাপ্ত হয়ে সংবর্ধনা অনুষ্ঠানে লাভ করা উৎসাহ শিক্ষার্থীদের অগ্রযাত্রাকে ত্বরান্বিত করে। সার্বিক বিবেচনায় আমরা বিশ্বাস করি, এ প্রতিযোগিতায় অংশগ্রহণ থেকে একজন প্রতিযোগীকে বিরত না রেখে পরীক্ষায় অংশগ্রহণের সুযোগ প্রদান করা অধিকতর সমীচীন।</li>
                    </ul>
                    <p class="text-right"><cite class="text-right">মাহবুব আরেফিন<br>
                        পরীক্ষা নিয়ন্ত্রক <br>
                        BCA বৃত্তি পরীক্ষা ২০২০</cite></p>
                </div>
            </div>
        </div>
        <div class="col-md-12  mt-5">
            <div class="card">
                <div class="card-header bg-success"><strong>{{ __('বৃত্তি সংক্রান্ত তথ্যাবলি') }}</strong></div>

                <div class="card-body">
                    <ul>
                        <li>*যে কোন স্কুলের তৃতীয় থেকে অষ্টম শ্রেণির ছাত্রছাত্রীরা এ পরীক্ষায় অংশগ্রহণ করতে পারবে।</li>
                        <li>*বৃত্তি পরীক্ষার রেজিস্ট্রেশন: ১ সেপ্টেম্বর ২০২০ সকাল ১০ ঘটিকা হতে ৩০ নভেম্বর ২০২০ রাত ৮ ঘটিকার মধ্যে www.bcabritti.com ওয়েবসাইটের মাধ্যমে অনলাইনে আবেদন করতে হবে।</li>
                        <li>*পরীক্ষার্থীর পাসপোর্ট সাইজ ছবি স্ক্যান কপি আপলোড করতে হবে।</li>
                        <li>*বৃত্তি পরীক্ষার রেজিস্ট্রেশন ফি ২০০/- টাকা।</li>
                        <li>*ট্যালেন্টপুল ও সাধারণ, এই দুই গ্রেডে এককালীন বৃত্তি প্রদান করা হবে।</li>
                        <li>*কোন পরীক্ষার্থী ১০০ নম্বরের মধ্যে ন্যূনতম ৮০ ও ৯০ নম্বর প্রাপ্ত হলে যথাক্রমে সাধারণ গ্রেড ও ট্যালেন্টপুলে বৃত্তির জন্য নির্বাচিত হবে।</li>
                        <li>*নির্ধারিত নিয়ম অনুযায়ী ফলাফল পুনর্মুল্যায়নের সুযোগ রয়েছে।</li>
                        <li>*ট্যালেন্টপুলে বৃত্তিপ্রাপ্ত প্রত্যেককে ৮০০/- টাকা ও সাধারণ গ্রেডে বৃত্তিপ্রাপ্ত প্রত্যেককে ৬০০/- টাকা এককালীন বৃত্তি প্রদান করা হবে।</li>
                        <li>*বৃত্তিপ্রাপ্ত প্রত্যেক শিক্ষার্থীকে আনুষ্ঠানিক সংবর্ধনার মাধ্যমে বৃত্তির সনদ, ক্রেস্ট ও নগদ অর্থ প্রদান করা হবে। বৃত্তি ও সংবর্ধনা অনুষ্ঠানের তারিখ ও সময় পরবর্তিতে মোবাইল ফোনে অথবা www.bcabritti.com ওয়েবসাইটের মাধ্যমে জানানো হবে।</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-12  mt-5">
            <div class="card">
                <div class="card-header bg-success"><strong>{{ __('পরীক্ষা সংক্রান্ত তথ্যাবলি') }}</strong></div>
                <div class="card-body">
                    <div class="card-header text-info"><strong>{{ __('*মান বন্টনঃ ') }}</strong></div>
                    <ul>
                        <li class="p-2">বাংলা-২0,ইংরেজি-২০,গণিত-২০,বিজ্ঞান-২০,বাংলাদেশ ও বিশ্বপরিচয়-২০, সর্বমোট= ১০০</li>
                    </ul>
                    
                    <div class="card-header text-info"><strong>{{ __('*প্রশ্নের ধরণঃ ') }}</strong></div> 
                      <ul>
                          <li class="p-2">
                            প্রশ্নপত্র নৈর্ব্যক্তিক সম্বলিত হবে।
                          </li>
                      </ul>
                      <div class="card-header text-info"><strong>{{ __('*পরীক্ষার তারিখঃ') }}</strong></div>
                     <ul>
                         <li class="p-2">১১ডিসেম্বর  ডিসেম্বর ২০২০, শুক্রবার, সকাল ১০ টা। </li>
                     </ul>
                     <div class="card-header text-info"><strong>{{ __('*পরীক্ষার সময়ঃ') }}</strong></div>
                     <ul>
                         <li class="p-2">১ ঘন্টা।</li>
                     </ul>
                     <div class="card-header text-info"><strong>{{ __('*পরীক্ষা গ্রহণ পদ্ধতি:') }}</strong></div>
                     <ul>
                         <li class="p-2">পরীক্ষা হবে ওপেন বুক এক্সাম পদ্ধতিতে। </li>
                     </ul>
                     <div class="card-header text-info"><strong>{{ __('*পরীক্ষা গ্রহণ পদ্ধতি:') }}</strong></div>
                     <ul>
                         <li class="p-2">পরীক্ষা হবে ওপেন বুক এক্সাম পদ্ধতিতে। </li>
                         <li>পরীক্ষার্থীর রোল নং হবে ছাত্র/ছাত্রীর ইউজার আইডি এবং অভিভাবকের মোবাইল নং হবে পাসওয়ার্ড।  </li>
                         <li>www.bcabritti.com ওয়েব সাইটে প্রবেশ করে Exam এ ক্লিক করে প্রত্যেকের আইডি পাসওয়ার্ড ব্যবহার করে এক্সাম দিতে হবে।  </li>
                         <li>৪ ডিসেম্বর ২০২০ সকাল ১০ ঘটিকায় ডেমো এক্সাম নেয়া হবে। </li>
                     </ul>
                     <div class="card-header text-info"><strong>{{ __('*ফলাফলঃ:') }}</strong></div>
                     <ul>
                         <li class="p-2">পরীক্ষার ফলাফল প্রকাশের তারিখ ৩০ ডিসেম্বর ২০২০, সকাল ১০ ঘটিকা আমাদের অফিসিয়াল ওয়েবসাইট www.bcabritti.com এ প্রকাশ করা হবে। </li>
                     </ul>


                </div>
            </div>
        </div>
        <div class="col-md-12  mt-5">
            <div class="card">
                <div class="card-header bg-success"><strong>{{ __('পরীক্ষার সিলেবাস') }}</strong></div>

                <div class="card-body">
                    <div class="card-header text-info"><strong>{{ __('*তৃতীয়, চতুর্থ, ও পঞ্চম শ্রেণি ') }}</strong></div>
                    <ul>
                        <li class="p-2">বাংলাঃ সর্ম্পূণ বই,
                            English: সর্ম্পূণ বই,
                            গনিতঃ সর্ম্পূণ বই,
                            বাংলাদেশ ও বিশ্বপরিচয়ঃ সর্ম্পূণ বই</li>
                    </ul>
                
                <div class="card-header text-info"><strong>{{ __('*ষষ্ঠ শ্রেণি') }}</strong></div>
                    <ul>
                        <li class="p-2">বাংলা প্রথম পত্রঃ সর্ম্পূণ বই,
                            বাংলা দ্বিতীয় পত্রঃ ভাষা ও বাংলা ভাষা, ধ্বনিতত্ত্ব, বানান, বাগর্থ, রুপতত্ত্ব।,
                            English 1st: সর্ম্পূণ বই,
                            English 2nd: Tense, Voice, Kinds of Sentence, Articles, Paragraph: Text Book Related,
                            গনিতঃ সর্ম্পূণ বই,
                            বাংলাদেশ ও বিশ্বপরিচয়ঃ সর্ম্পূণ বই,
                            সাধারণ বিজ্ঞানঃ সর্ম্পূণ বই</li>
                    </ul>
                
                <div class="card-header text-info"><strong>{{ __('*সপ্তম শ্রেণি') }}</strong></div>
                    <ul>
                        <li class="p-2">বাংলা প্রথম পত্রঃ সর্ম্পূণ বই,
                            বাংলা দ্বিতীয় পত্রঃ ভাষা, ধ্বনি ও বর্ণ, সন্ধি, কারক ও বিভক্তি, শব্দ গঠন, বানান,  
                                                    উপসর্গের শব্দ গঠন।
                            English 1st: সর্ম্পূণ বই,
                            English 2nd: Tense, Voice, Kinds of Sentence, Articles, Translation (Unseen), 
                            গনিতঃ সর্ম্পূণ বই,
                            বাংলাদেশ ও বিশ্বপরিচয়ঃ সর্ম্পূণ বই,
                            সাধারণ বিজ্ঞানঃ সর্ম্পূণ বই</li>
                    </ul>
                
                <div class="card-header text-info"><strong>{{ __('*অষ্টম শ্রেণি') }}</strong></div>
                    <ul class="">
                        <li class="p-2">বাংলা প্রথম পত্রঃ সর্ম্পূণ বই,
                            বাংলা দ্বিতীয় পত্রঃ ভাষা, শব্দ ও পদ, ধ্বনি ও বর্ণ, শব্দ গঠন, বানান, ধাতু ও ক্রিয়াপদ,
                            English 1st: সর্ম্পূণ বই,
                            English 2nd: Speech, Voice, Changing Sentences, Punctuation, Article, Suffix, Prefix, 
                            গনিতঃ সর্ম্পূণ বই,
                            বাংলাদেশ ও বিশ্বপরিচয়ঃ সর্ম্পূণ বই,
                            সাধারণ বিজ্ঞানঃ সর্ম্পূণ বই</li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
