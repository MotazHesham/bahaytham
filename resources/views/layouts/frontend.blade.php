<!DOCTYPE html>
<html lang="ar">

@php
    $about_us = \App\Models\Aboutu::first();
@endphp

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('meta_title', $about_us->site_name )</title>
    <meta name="description" content="@yield('meta_description', $about_us->description_seo)" />
    <meta name="keywords" content="@yield('meta_keywords', $about_us->keywords_seo)">
    <meta name="author" content="{{ $about_us->author_seo }}">
    <meta name="sitemap_link" content="{{ $about_us->sitemap_link_seo }}"> 

    @yield('meta')
    <!--icons-->
    <link rel="icon" href="{{ $about_us->logo ? $about_us->logo->getUrl() : '' }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ $about_us->logo ? $about_us->logo->getUrl() : '' }}" type="image/x-icon">
    
    <!-- Shortcut Icon -->
    <link rel="shortcut icon" href="{{ asset('fronte/images/logo2.jpg') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/fontawesome/css/all.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap-a.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/hover-min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/swiper.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/jquery.fancybox.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/normalize.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}" /> 
    @yield('styles') 
</head>

<body>

    <header id="home">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ $about_us->logo ? $about_us->logo->getUrl() : asset('frontend/images/logo.png') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">الرئيسية</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('frontend.aboutus') }}">عن الشركة</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('frontend.services') }}">خدماتنا</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('frontend.projects') }}">مشاريعنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontend.contact') }}">تواصل معنا</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link reg_accept" href="{{ route('frontend.request_service') }}"> طلب خدمة</a>
                        </li>

                    </ul>


                </div>
            </div>
        </nav>
    </header> 
    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="about_footer">
                        <h3 class="titl_foot">الموقع الرسمي تركي باهيثم </h3>
                        <p>{{ $about_us->description }}</p>
                    </div>
                </div>

                <div class="col-4">
                    <h3 class="titl_foot">روابط سريعة</h3>
                    <ul class="list_foot">
                        <li><a href="{{ route('home') }}"> الرئيسية</a></li>
                        <li><a href="{{ route('frontend.aboutus') }}">عن الشركة</a></li>
                        <li><a href="{{ route('frontend.services') }}">  خدماتنا</a></li>
                        <li><a href="{{ route('frontend.projects') }}">  مشاريعنا</a></li>
                        <li><a href="{{ route('frontend.contact') }}"> تواصل معنا</a></li>
                        <li><a href="{{ route('frontend.request_service') }}"> طلب خدمة</a></li> 
                    </ul>
                </div>

                <div class="col-4">
                    <h3 class="titl_foot"> تواصل معنا</h3>
                    <ul class="info_contact">
                        <li><i class="fa-solid fa-location-dot"></i>{{ $about_us->address }}</li>
                        <li><i class="fa-solid fa-phone"></i>{{ $about_us->phone_number }}</li>
                        <li><i class="fa-solid fa-envelope"></i>{{ $about_us->email }}</li>
                    </ul>
                </div>

                <div class="copyright">
                    <p> جميع الحقوق محفوظة © 2022 باهيثم - تصميم وبرمجة تحالف الرؤى </p>
                </div>
            </div>
        </div>
    </footer>



    @include('sweetalert::alert')
    
    <script src="{{ asset('frontend/js/jquery-3.0.0.min.js') }}"></script>
    <!--<script src="js/jquery-migrate-3.0.0.min.js"></script>-->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('frontend/js/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    @yield('scripts')
</body>

</html>