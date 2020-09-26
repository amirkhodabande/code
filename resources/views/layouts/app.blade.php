<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>CodeLearn</title>
  <!-- Styles -->
  <link href="{{ asset('assets/css/core.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/thesaas.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/bootstrap-rtl.min.css') }}" rel="stylesheet">


  <!-- Favicons -->
  <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
  <link rel="icon" href="assets/img/favicon.png">
  <!--  Open Graph Tags -->

</head>

<body dir="rtl">
<div id="app">
    @auth
    @else
    <vue-login></vue-login>
    @endauth
    <!-- Topbar -->
    <nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
        <div class="container">
        <div class="topbar-right">
            <ul class="topbar-nav nav" >

                <li class="nav-item ">
                    <a class="nav-link ml-2" >حساب <i class="fa fa-caret-down"></i></a>
                    <div class="nav-submenu">
                        @auth
                        <a class="nav-link" href="{{ route('panel.show', auth()->user()->emailslug) }}">
                            {{ auth()->user()->name }}
                            <small>پنل کار بری</small>
                        </a>
                        <a class="nav-link " href="/logout">خروج</a>
                        {{-- <a class="nav-link" href="/logout">خروح</a> --}}
                        @else
                        <a class="nav-link" href="javascript:;" data-toggle="modal" data-target="#loginModal">ورود</a>
                        <a class="nav-link" href="{{ route('register') }}">ثبت نام</a>
                        @endauth
                    </div>
                </li>
            @if($_SERVER['REQUEST_URI'] == '/')
                <li class="nav-item">
                    <a class="nav-link ml-2" href="#series">دوره ها</a>
                </li>
                <li class="nav-item">
                <a class="nav-link ml-2" href="#tecs">تکنولوژی ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-2" href="#sources">کد ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-2" href="#blogs">بلاگ ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-2" href="#about">درباره</a>
                </li>
            @else
            <li class="nav-item">
                <a class="nav-link ml-2" href="/#series">دوره ها</a>
            </li>
            <li class="nav-item">
            <a class="nav-link ml-2" href="/#tecs">تکنولوژی ها</a>
            </li>
            <li class="nav-item">
                <a class="nav-link ml-2" href="/#sources">کد ها</a>
            </li>
            <li class="nav-item">
                <a class="nav-link ml-2" href="/#blogs">بلاگ ها</a>
            </li>
            <li class="nav-item">
                <a class="nav-link ml-2" href="/#about">درباره</a>
            </li>
            @endif

            <!-- ////////// -->
            </ul>
        </div>

        <div class="topbar-left">
            <button class="topbar-toggler">&#9776;</button>
            <a class="topbar-brand" href="/" title="لطفا فایل @@readme را بخوانید">
            <!-- <img class="logo-default" src="assets/img/logo.png" alt="logo">
            <img class="logo-inverse" src="assets/img/logo-light.png" alt="logo"> -->
            <small>محتوای ازمایشی</small>
            <b>CodeLearn</b>
            </a>
        </div>

        </div>
    </nav>
    <!-- END Topbar -->
    <!-- Header -->
    @yield('header')

    <!-- END Header -->

    <!-- Main container -->
    @yield('content')
    <!-- END Main container -->


    <!-- Footer -->
    <footer class="site-footer mt-50">
        <div class="container">
        <div class="d-flex align-items-center">

            <div class="col-9">
            <ul class="nav nav-primary nav-hero d-flex justify-content-start">

   @if($_SERVER['REQUEST_URI'] == '/')
                <li class="nav-item">
                    <a class="nav-link ml-2" href="#series">دوره ها</a>
                </li>
                <li class="nav-item">
                <a class="nav-link ml-2" href="#tecs">تکنولوژی ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-2" href="#sources">کد ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-2" href="#blogs">بلاگ ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-2" href="#about">درباره</a>
                </li>
            @else
            <li class="nav-item">
                <a class="nav-link ml-2" href="/#series">دوره ها</a>
            </li>
            <li class="nav-item">
            <a class="nav-link ml-2" href="/#tecs">تکنولوژی ها</a>
            </li>
            <li class="nav-item">
                <a class="nav-link ml-2" href="/#sources">کد ها</a>
            </li>
            <li class="nav-item">
                <a class="nav-link ml-2" href="/#blogs">بلاگ ها</a>
            </li>
            <li class="nav-item">
                <a class="nav-link ml-2" href="/#about">درباره</a>
            </li>
            @endif


            </ul>
            </div>
            <div class="col-3">
            <p class="text-right">
                <a href="index.html">
                <!-- CodeLearn -->
                {{-- <img src="assets/img/bg-cup.jpg" alt="logo"> --}}
                <b>CodeLearn</b>
                </a>
            </p>
            </div>

        </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>


<script>
    window.AuthUser = '{!! auth()->user() !!}'
    //  __ => for make this function uniq and give the uniq name to this function....
    window.__auth = function () {
        try {
            return JSON.parse(AuthUser)
        } catch (error) {
            return null
        }
    }
</script>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('assets/js/core.min.js') }}"></script>
  <script src="{{ asset('assets/js/thesaas.min.js') }}"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>


</body>

</html>
