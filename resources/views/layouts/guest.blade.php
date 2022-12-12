{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html> --}}

<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/fela/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Nov 2022 09:24:55 GMT -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <link rel="stylesheet" href="/assets/css/remixicon.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/fancybox.css">
    <link rel="stylesheet" href="/assets/css/jquery-ui-min.css">
    <link rel="stylesheet" href="/assets/css/odometer.min.css">
    <link rel="stylesheet" href="/assets/css/aos.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <link rel="stylesheet" href="/assets/css/dark-theme.css">
    <title>Fela - Apartments & House Renting HTML Template</title>
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
</head>

<body>

    {{-- <div class="loader js-preloader">
        <div></div>
        <div></div>
        <div></div>
    </div> --}}


    <div class="switch-theme-mode">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div>

    <div class="page-wrapper">

        <header class="header-wrap style1">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/index.html">
                        <img class="logo-light" src="/assets/img/logo.png" alt="logo">
                        <img class="logo-dark" src="/assets/img/logo-white.png" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                        <div class="menu-close d-lg-none">
                            <a href="/javascript:void(0)"> <i class="ri-close-line"></i></a>
                        </div>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="{{ route('welcome') }}" class="nav-link active">
                                    Home
                                    {{-- <i class="ri-add-line"></i> --}}
                                </a>

                            </li>
                            <li class="nav-item">
                                <a href="{{route('about-us')}}" class="nav-link">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('listings') }}" class="nav-link">
                                    Listings
                                    {{-- <i class="ri-add-line"></i> --}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('agents')}}" class="nav-link">
                                    Agents
                                    {{-- <i class="ri-add-line"></i> --}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('blog')}}" class="nav-link">
                                    Blog
                                    {{-- <i class="ri-add-line"></i> --}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('contact-us')}}" class="nav-link">Contact Us</a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <a href="{{ route('login') }}" type="button" class="btn style3" >Sign In</a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <a href="{{ route('register') }}" type="button" class="btn style1" >Sign Up</a>
                            </li>
                        </ul>
                        @if (Auth::user())
                        <div class="others-options  md-none">
                                <li class="nav-item ">
                                    <a href="{{ route('dashboard') }}" type="button" class="btn style1" >{{ Auth::user()->name }}</a>
                                </li>
                        </div>
                        @else

                        <div class="others-options  md-none">
                            <div class="header-btn">
                                <a href="{{ route('login') }}" type="button" class="btn style3">Sign In</a>
                                <a href="{{ route('register') }}" type="button" class="btn style1">Sign Up</a>
                            </div>
                        </div>

                        @endif
                    </div>
                </nav>
                <div class="mobile-bar-wrap">
                    <div class="mobile-menu d-lg-none">
                        <a href="/javascript:void(0)"><i class="ri-menu-line"></i></a>
                    </div>
                </div>
            </div>
        </header>


        {{ $slot }}


        <footer class="footer-wrap style1 pt-100">
            <div class="footer-top">
                <div class="container">
                    <div class="row pb-75">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 pe-xl-5">
                            <div class="footer-widget">
                                <a href="{{route('welcome')}}" class="footer-logo">
                                    <img class="logo-light" src="/assets/img/logo.png" alt="Image">
                                    <img class="logo-dark" src="/assets/img/logo-white.png" alt="Image">
                                </a>
                                <p class="comp-desc">
                                    Lorem ipsum dolor sit amet consec tetur aditonsi soom isotope elit esumo tempo
                                    incidunt labore dolore magna aliqu core tetur adip iscing eliteous sedun amet.
                                </p>
                                <h6>Language</h6>
                                <div class="select-lang">
                                    <div class="navbar-option-item navbar-language dropdown language-option">
                                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <span class="lang-name"></span>
                                        </button>
                                        <div class="dropdown-menu language-dropdown-menu">
                                            <a class="dropdown-item" href="/#">
                                                <img src="/assets/img/uk.png" alt="flag">
                                                English
                                            </a>
                                            <a class="dropdown-item" href="/#">
                                                <img src="/assets/img/china.png" alt="flag">
                                                简体中文
                                            </a>
                                            <a class="dropdown-item" href="/#">
                                                <img src="/assets/img/uae.png" alt="flag">
                                                العربيّة
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
                            <div class="footer-widget">
                                <h3 class="footer-widget-title">Popular Cities</h3>
                                <ul class="footer-menu list-style">
                                    <li>
                                        <a href="{{ route('listings') }}" >
                                            <i class="ri-arrow-right-s-line"></i>
                                            New York
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('listings') }}" >
                                            <i class="ri-arrow-right-s-line"></i>
                                            Sydney
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('listings') }}" >
                                            <i class="ri-arrow-right-s-line"></i>
                                            Dubai
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('listings') }}" >
                                            <i class="ri-arrow-right-s-line"></i>
                                            Florida
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('listings') }}" >
                                            <i class="ri-arrow-right-s-line"></i>
                                            Georgia
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('listings') }}" >
                                            <i class="ri-arrow-right-s-line"></i>
                                            Los Angeles
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 ps-xl-5">
                            <div class="footer-widget">
                                <h3 class="footer-widget-title">Quick Links</h3>
                                <ul class="footer-menu list-style">
                                    <li>
                                        <a href="{{route('about-us')}}" >
                                            <i class="ri-arrow-right-s-line"></i>
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('agents')}}">
                                            <i class="ri-arrow-right-s-line"></i>
                                            Agents
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('blog')}}">
                                            <i class="ri-arrow-right-s-line"></i>
                                            Latest News
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('contact-us')}}" >
                                            <i class="ri-arrow-right-s-line"></i>
                                            Contact Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('privacy')}}" >
                                            <i class="ri-arrow-right-s-line"></i>
                                            Privacy Policy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('service')}}" >
                                            <i class="ri-arrow-right-s-line"></i>
                                            Terms &amp; Conditions
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="footer-widget">
                                <div class="comp-map">
                                    <iframe
                                        src="/https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8385385572983!2d144.95358331584498!3d-37.81725074201705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2sbd!4v1612419490850!5m2!1sen!2sbd">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-bottom">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <p class="copyright-text">
                                <i class="ri-copyright-line"></i><span>Fela</span>. All Rights Reserved By <a
                                    href="/https://hibootstrap.com/" target="_blank">HiBootstrap</a>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <ul class="social-profile list-style style1">
                                <li>
                                    <a target="_blank" href="/https://facebook.com/">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="/https://twitter.com/">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="/https://instagram.com/">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="/https://linkedin.com/">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>


    <a href="/javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>


    {{-- <div class="modal fade" id="signIn" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center gx-5">
                        <div class="col-md-6">
                            <div class="login-bg bg-f">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="login-content">
                                <h2>Sign In</h2>
                                <form class="user-form" action="#">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input id="text" name="username" type="text" placeholder="Username"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input id="pwd_2" name="pwd_2" type="password" placeholder="Password"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <button class="btn style1">
                                                    Login Now
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <p class="text-center mb-10">Or</p>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="button" class="btn fb">SignIn With Facebook <span><i
                                                            class="ri-facebook-fill"></i></span></button>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="button" class="btn linkedin">SignIn With Linkedin <span><i
                                                            class="ri-linkedin-fill"></i></span></button>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-0">
                                                <button type="button" class="btn twitter">SignIn With Twitter <span><i
                                                            class="ri-twitter-fill"></i></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="signUp" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center gx-5">
                        <div class="col-md-6">
                            <div class="login-bg bg-f">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="login-content">
                                <h2>Sign Up</h2>
                                <p>Please fill the form to create an account</p>
                                <form class="user-form" action="#">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input id="fname" name="fname" type="text" placeholder="Full Name"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input id="email" name="email" type="email" placeholder="Email"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input id="pwd" name="pwd" type="password" placeholder="Password"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input id="pwd_3" name="pwd_3" placeholder="Confirm Password"
                                                    type="password" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-12">
                                            <div class="checkbox style3">
                                                <input type="checkbox" id="test_1">
                                                <label for="test_1">
                                                    I Agree with the <a class="link style1"
                                                        href="/terms-of-service.html">Terms &amp; conditions</a> &amp; <a
                                                        class="link style1" href="/privacy-policy.html">privacy
                                                        policy</a>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <button class="btn style1">
                                                    Register Now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/form-validator.min.js"></script>
    <script src="/assets/js/contact-form-script.js"></script>
    <script src="/assets/js/aos.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/jquery-ui-min.js"></script>
    <script src="/assets/js/odometer.min.js"></script>
    <script src="/assets/js/fancybox.js"></script>
    <script src="/assets/js/jquery.appear.js"></script>
    <script src="/assets/js/tweenmax.min.js"></script>
    <script src="/assets/js/main.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/fela/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Nov 2022 09:25:41 GMT -->

</html>
