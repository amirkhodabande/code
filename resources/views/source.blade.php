@extends('layouts.app')

@section('header')
    <!-- Header -->
    <header class="header header-inverse h-fullscreen" style="background-image: url({{ asset('assets/img/bg-laptop.jpg') }})"
        data-overlay="8">
        <div class="container text-center">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <h1 data-aos="flip-up">CodeLearn</h1>
                    <p class="fs-18 opacity-70" data-aos="slide-up">
                        سورس هایی هیجان انگیز
                    </p>
                </div>
            </div>
        </div>
    </header>
    <!-- END Header -->
    <!-- End -->
@stop

@section('content')
    <!-- Main container -->
    <main class="main-content">
        <section class="section pb-0 bg-img-fixed text-white" style="
          background-image: linear-gradient(10deg,rgb(216, 154, 231) 50%,rgb(88, 155, 255) 70%);">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 pb-70 order-2 order-lg-1">
                        <h2>{{ $source->title }}</h2>
                        <p>
                           {{ $source->description }}
                        </p>

                        <hr class="w-50 ml-0" />

                        <div class="d-md-flex justify-content-center text-center">
                            <div class="ml-10 text-left col-12 col-md-6">
                                <p class="fs-30"><i class="fa fa-book"></i></p>
                                <h6 class="text-uppercase fw-600">خوانا و قابل فهم</h6>
                                <p>
                                    به دلیل استفاده از فریمورک های محبوب , کد نویسی بر اساس
                                    استاندارد های معروف و مستند سازی شفافی که از کار انجام شده
                                    است به راحتی قابل فهم است.
                                </p>
                            </div>

                            <div class="mr-10 text-left col-12 col-md-6">
                                <p class="fs-30"><i class="fa fa-laptop"></i></p>
                                <h6 class="text-uppercase fw-600">استاندارد</h6>
                                <p>
                                    تمام قالب های ما علاوه بر اینکه به طور زیبایی ریسپانسیو شده
                                    اند بلکه تمام اصال SEO در طراحی قالب در ان ها رعایت شده است.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 align-self-end text-center d-md-block d-lg-none order-0">
                        <img src="{{ asset($source->image) }}" alt="..." data-aos="zoom-in" />
                    </div>

                    <div class="col-12 col-md-6 align-self-end text-center d-none d-lg-block order-2 mb-100">
                        <img src="{{ asset($source->image) }}" alt="..." data-aos="flip-up" />
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- END Main container -->

    <!-- Download Header -->
    <header class="header p-0 h-400 text-white d-flex align-items-center justify-content-center"
        style="background-image: url({{ asset('assets/img/bg-thunder.jpg') }});">
        <canvas class="constellation"></canvas>
        <div class="text-center">
            <p class="h1 text-sky-down">دانلود</p>
            <h3 class=" text-sky-down">
                @auth
                به راحتی سورس های مارا
                <span class="text-primary" data-type=" دانلود کنید, استفاده کنید"></span>
                @else
                برای دانلود باید
                <span class="text-primary" data-type=" وارد حساب خود شوید"></span>
                <section>
                    <a  href="javascript:;" data-toggle="modal" data-target="#loginModal" class="btn btn-lg btn-primary">وارد شوید</a>
                </section>
                @endauth
            </h3>
        </div>
    </header>
    <!-- End -->

    <!-- Download -->
    <article class="container mt-5 d-flex justify-content-center">
        <section class="col-lg-10">
            <p class="h2 text-center mb-5">{{ $source->title }}</p>
            <div class=" text-justify">
                <p>این پنل حاصل ماه ها زحمت ماست و شما با استفاده درست از ان میتوانید به راحتی نیاز های خود را بر اورده
                    کنید.این
                    پنل
                    حاصل ماه ها زحمت ماست و شما با استفاده درست از ان میتوانید به راحتی نیاز های خود را بر اورده
                    کنید.این پنل حاصل
                    ماه
                    ها زحمت ماست و شما با استفاده درست از ان میتوانید به راحتی نیاز های خود را بر اورده کنید.این پنل
                    حاصل ماه ها
                    زحمت
                    ماست و شما با استفاده درست از ان میتوانید به راحتی نیاز های خود را بر اورده کنید.این پنل حاصل ماه ها
                    زحمت ماست
                    و
                    شما با استفاده درست از ان میتوانید به راحتی نیاز های خود را بر اورده کنید.این پنل حاصل ماه ها زحمت
                    ماست و شما
                    با
                    استفاده درست از ان میتوانید به راحتی نیاز های خود را بر اورده کنید.این پنل حاصل ماه ها زحمت ماست و
                    شما با.
                </p>
            <p>{{ $source->description }}</p>
            </div>
            <div class="mt-5 d-flex justify-content-around">
                <h3>دانلود {{ $source->title }}</h3>
                <a href="{{ $source->file }}" class="btn btn-primary"><i class="fa fa-download"></i>دانلود</a>
            </div>
        </section>
    </article>
    <!-- End -->

@stop

