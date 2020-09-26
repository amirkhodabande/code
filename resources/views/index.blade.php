<!--
      <section class="row gap-y text-center shadow-sm pb-5">
              <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                <aside class="shadow-on-hover p-1">
                  <p>
                    <a href="">
                      <img class="rounded " src="assets/img/bg-cup.jpg" alt="demo bootstrap landing">
                    </a>
                  </p>
                  <p><strong>Bootstrap</strong></p>
                  <p><small> اموزش بوت استرپ به صورت پروژه محو اموزش بوت استرپ به صورت پرو اموزش بوت استرپ به صورت پروژه محو
                      اموزش بوت استرپ به صورت پروژژه محو اموزش بوت استرپ به صورت پروژه محور</small></p>
                  <p><a href="" class="btn btn-sm btn-info mt-1">شروع یادگیری</a></p>
                </aside>
              </div>

                <a class="col-12 text-center scroll-down-2 scroll-down-inverse scrolldownblack" href=""
                data-scrollto="section-demo">
                <span></span>
              </a>

            </section>
-->

@extends('layouts.app')
@section('header')
<header class="header fadeout header-inverse pb-0 h-fullscreen"
    style="background-image: linear-gradient(to bottom, #243949 0%, #517fa4 100%);">
    <canvas class="constellation"></canvas>
    <div class="container">
      <div class="row h-full">
        <div class="col-12 text-center align-self-center">
          <h1 class="fs-50 fw-600 lh-15 hidden-sm-down">
            یاد گیری
            <span class="text-primary" data-type="زیباست, راحت است"></span>
          </h1>
          <h1 class="fs-35 fw-600 lh-15 hidden-md-up">
            یاد گیری
            <br>
            <span class="text-primary" data-type="زیباست, راحت است"></span>
          </h1>
          <br>
          <p class="fs-20 hidden-sm-down">
            <strong>کد لرن</strong>
            مرجع تخصصی یادگیری و تمرین برنامه نویسی به زبان فارسی است
          </p>
          <br>
          <hr class="w-60 hidden-sm-down">
          <br>
          <a class="btn btn-xl btn-round btn-primary fs-20 fw-500 w-350 shadow-3 hidden-sm-down" href="">عضویت در خبر
            نامه ما</a>
          <a class="btn btn-lg btn-round btn-primary w-250 shadow-3 hidden-md-up" href="">عضویت در خبر
            نامه ما</a>
          <br>
          <p class="mt-2 mt-md-4"><a href="">
              <small>
                AmirhosseinKhodabandeloo
              </small>
            </a></p>
          <br>
        </div>
        <div class="col-12 align-self-end text-center pb-70">
          <a class="scroll-down-2 scroll-down-inverse scroll-down-black" href="" data-scrollto="section-demo">
            <span></span>
          </a>
        </div>
      </div>
    </div>
  </header>
@stop

@section('content')
<main class="main-content">

    <!-- Series -->
        <section class="section overflow-hidden" id="series">
          <div class="container">
            <header class="section-header">
              <h2>دوره ها</h2>
            </header>


            <vue-series></vue-series>


          </div>
        </section>
    <!--  End !-->



        <section class="section bg-gray bb-11 pb-0">
          <div class="container">
            <header class="section-header">
              <small>Code Learn</small>
              <h2>کار امد ترین وب سایت اموزشی</h2>
            </header>
          </div>

          <!-- //// -->
          <section class="col-12  d-lg-flex d-sm-block justify-content-between">
            <div class="col-12  col-md-6 bg-img min-height-bacg" style="background-image: url(assets/img/bg-cup.jpg)">
            </div>
            <div class="col-12  col-md-4 py-90">
              <p><small>سورس کد</small></p>
              <h5>یکی از بهترین روش های یادگیری</h5>
              <p>
                اموزش ویدیویی زمانی میتواند بهترین تاثیر خود را بگذارد که شما بعد از دیدن هر ویدئو تمرین کافی را داشته باشید
                و مطالعه سورس کد های معتبر مانند مطالعه کتاب است.
              </p>
              <br>
              <a class="btn btn-round btn-primary" href="#">بیشتر</a>
            </div>
          </section>

          <section class="col-12  d-lg-flex d-sm-block justify-content-between">

            <div class="col-12 col-md-6 order-2  bg-img min-height-bacg"
              style="background-image: url(assets/img/bg-thunder.jpg);">
            </div>
            <div class="col-12 offset-md-1 col-md-4 py-90 order-1">
              <p><small>وب گردی</small></p>
              <h5>بلاگ ها بسیار کاربردی</h5>
              <p>
                بلاگ های معتبر و بروز کمک های بسیار زیادی میتوانند به شما بکنند زیرا شما میتوانید در کمترین زمان اطلاعات
                بسیار زیادی را در قالب وبلاگ ها مطالعه کنید.
              </p>
              <br>
              <a class="btn btn-round btn-primary" href="#">بیشتر</a>
            </div>
          </section>


        </section>
        <!-- Tecs -->
        <section class="section" id="tecs">
          <div class="container">
            <header class="section-header">
              <h2>تکنولوژی های مورد استفاده </h2>
              <hr>
              <p class="lead">ما برای پیشرفت شما از بهترین زبان ها و فریمورک های روز دنیا استفاده میکنیم</p>
            </header>


            <div class="swiper-container partner" data-autoplay="1000" data-slides-per-view="3">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="rounded-circle w-90 h-90 " src="assets/img/bg-cup.jpg" alt="...">
                </div>
                <div class="swiper-slide"><img class="rounded-circle w-90 h-90" src="assets/img/bg-laptop.jpg" alt="..."></div>
            </div>

          </div>
        </section>
        <!-- End -->

        <!-- Tect info -->
        <section class="section bg-img bg-img-fixed text-white" dir="ltr"
          style="background-image: url(assets/img/bg-thunder.jpg);">
          <div class="container">
            <header class="section-header ">
              <h2>معرفی تکنولوژی ها</h2>
              <hr>
              <p class="lead"> .اطلاعاتی مختصر در باره تکنولوژی های مورد استفاده </p>
            </header>


            <div class="swiper-container swiper-button-circular" data-slides-per-view="2" data-space-between="50"
              data-centered-slides="true">
              <div class="swiper-wrapper pb-0">

                <div class="swiper-slide">
                  <div class="card card-shadowed"
                    style="background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);">

                    <header class="text-white card-header border-0 text-center h3 direction" dir="rtl"
                      style="background-image: linear-gradient(190deg, #e9d2ff 0%, #9492ffa1 100%);">
                      لاراول
                    </header>
                    <div class="card-block px-30" dir="rtl">
                      <p class="mb-0 h-140">
                        لاراول محبوب ترین فریمورک php است که بر پایه معماری 3 لایه یا همان MVC بنا شده است.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="card card-shadowed"
                    style="background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);">

                    <header class="text-white card-header border-0 text-center h3 direction" dir="rtl"
                      style="background-image: linear-gradient(190deg, #e9d2ff 0%, #9492ffa1 100%);">
                      ویو جی اس
                    </header>
                    <div class="card-block px-30" dir="rtl">
                      <p class="mb-0 h-140">
                        ویو جی اس یکی از بهترین فریمورک های js است که به دلایلی نظیر سبک بودن و هماهنگی خوب با لاراول بسیار
                        محبوب شده است.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="card card-shadowed"
                    style="background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);">

                    <header class="text-white card-header border-0 text-center h3 direction text-white" dir="rtl"
                      style="background-image: linear-gradient(190deg, #e9d2ff 0%, #9492ffa1 100%);">
                      بوت استرپ
                    </header>
                    <div class="card-block px-30" dir="rtl">
                      <p class="mb-0 h-140">
                        بوت استرپ محبوب ترین فریم ورکی است که از ترکب کلاس های css و اسکریپت ها js,jquery تشکیل شده است.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="card card-shadowed"
                    style="background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);">

                    <header class="text-white card-header border-0 text-center h3 direction" dir="rtl"
                      style="background-image: linear-gradient(190deg, #e9d2ff 0%, #9492ffa1 100%);">
                      JqueryAjax
                    </header>
                    <div class="card-block px-30" dir="rtl">
                      <p class="mb-0 h-140">
                        با ajax ما به راحتی توانایی ارسال request به و یا دریافت ان از سرور بدون رفرش صفحه را به دست میاوریم
                        و استفاده از ان نیز از طریق کتابخانه jquery بسیار راحت است.
                      </p>
                    </div>
                  </div>
                </div>


              </div>

              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>


          </div>
        </section>
        <!-- end -->

        <!-- Some info about sources -->
        <section class="section bg-grey text-justify" id="sources" dir="ltr">
          <div class="container-wide">
            <div class="row gap-y">

              <div class="col-12 col-lg-6 align-self-center px-50" dir="rtl">
                <h2>سورس کد ها کاملا قابل فهم</h2><br>
                <p>
                  ما در ایجاد سورس هایمان تمام تلاشمان را کرده ایم که این کد ها کاملا قابل فهم و استفاده باشد.
                  و برای همین بیشتر سورس ها با فریمورک های معروف ایجاد شده که الگویی قابل فهم داشته باشند و هچنین مستند سازی
                  که از کد ها انجام داده ایم بسیار مفید است.
                </p>
                <br>
                <a class="btn btn-lg btn-round btn-primary shadow-3" href="#">ادامه</a>
              </div>


              <div class="col-12 col-lg-6">
                <img class="shadow-2" src="assets/img/bg-cup.jpg" alt="..." data-aos="fade-left">
              </div>

            </div>
          </div>
        </section>

        <section class="section pb-0 overflow-hidden text-justify" dir="ltr">
          <div class="container">
            <div class="row">

              <div class="col-12 col-md-6 text-center">
                <img class="mr-40 d-none d-md-block" height="700px" src="assets/img/bg-cup.jpg" alt="..."
                  data-aos="slide-up">

                <img class="col-12 d-sm-block d-md-none d-lg-none" src="assets/img/bg-cup.jpg" alt="..."
                  data-aos="fade-right">
              </div>


              <div class="col-12 col-md-6 align-self-center pb-70 order-sm-1" dir="rtl">
                <h3>قالب های سبک و پیشرفته</h3>
                <p>
                  قالب های ما با فریمورک بوت استرپ قدرت گرفته اند و برای بخش های مورد نیاز شخی سازی و ویرایش هایی کار امد
                  انجام شده است اما نیازی به نگرانی نیست چون به گونه ایی ویرایش ها انجم شده است که شما به سادگی میتوانید بخش
                  هایی که مورد نیازتان نیست را حذف و ویرایش کنید. </p>

                <br><br>

                <div class="flexbox flex-grow-all gap-items-3 text-left">
                  <div>
                    <p><i class="fa fa-tv text-warning fs-30"></i></p>
                    <h5>ریسپانسیو</h5>
                    <p>تمام قالب های ما برای انواع دستگاه ها قابل نمایش است و به درستی ریسپانسیو شده است.</p>
                  </div>

                  <div>
                    <p><i class="fa fa-code text-danger fs-30"></i></p>
                    <h5>استاندارد</h5>
                    <p>تمام موارد استاندارد سازی در طراحی قالب برای بهینه سازی موتور های جستجو را در طراحی رعایت کرده ایم.
                    </p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>
        <!-- end -->

        <!-- Sources -->
        <div class="text-center mt-120">
          <h2>سورس کد ها</h2>
        </div>


        <section class="section overflow-hidden mt-50 sources-min-h  pb-100 "
        style="background-image: linear-gradient(151.5deg, rgb(238, 184, 252) -30%, #8ec5fc4b 50%, #eb6dd010 51%);">
          <div class=" container">

            <div data-provide="shuffle">
              <!-- Buttons -->
              <div class="text-center gap-multiline-items-2" data-shuffle="filter">
                <button class="btn btn-w-md btn-outline btn-round btn-info active" data-shuffle="button">همه</button>
                <button class="btn btn-w-md btn-outline btn-round btn-info" data-shuffle="button"
                  data-group="laravel">لاراول</button>
                  <button class="btn btn-w-md btn-outline btn-round btn-primary" data-shuffle="button"
                  data-group="js">جاوا اسکریپت</button>
                  <button class="btn btn-w-md btn-outline btn-round btn-primary" data-shuffle="button"
                  data-group="html">html</button>
              </div>
              <!-- End -->


              <br><br>

              <div class="row gap-y gap-2" data-shuffle="list">

                @foreach($sources as $s)

                <div class="col-6 col-lg-3 h-200" data-shuffle="item" data-groups="{{ $s->cat }}">
                  <a class="portfolio-1" href="{{ route('source-show', $s->id) }}">
                    <img height="200px"   src="{{ asset($s->image) }}" alt="screenshot">
                    <div class="portfolio-details">
                      <h5>{{ $s->title }}</h5>
                      <p>ادامه</p>
                    </div>
                  </a>
                </div>
                @endforeach

            </div>


          </div>
        </section>

        <!-- end -->

        <section class="mt-300 section section-inverse py-120 bg-img-fixed h-600" id="blogs"
        style="background-image: linear-gradient(125deg, #e0c3fc 50%, #aac4fce5 57%);">
        <div class="container">
          <header class="section-header">
            <h1 class="lh-15 ">
              با گشت و گذار در بلاگ های ما اطلاعات خود را
              <br>
              <span class="text-primary" data-type="افزایش دهید, بروز رسانی کنید, کامل کنید"></span>
            </h1>
          </header>


        </div>
      </section>


      <!-- Blogs -->

      <section class=" section bg-gray">
              <div class="container">

                  <vue-blogs></vue-blogs>


              </div>
      </section>

        <!-- end -->

        {{-- about --}}
        <section class="section section-inverse py-120 bg-img bg-fixed" id="about"
          style="background-image: url(assets/img/bg-laptop.jpg)" data-overlay="4" id="section-download">
          <div class="container">

            <div class="section-dialog text-center" data-aos="zoom-in" data-aos-duration="1000">
              <p>
                CodeLearn
                <!-- <img src="assets/img/logo-light.png" alt="logo"> -->
              </p>
              <br>
              <h2>امیر خدابنده</h2>
              <div class="text-left">
                <p>
                  <i class="fa fa-mobile" aria-hidden="true"></i>
                  <a href="09333064753">09333064753</a>
                </p>
                <p>
                  <i class="fa fa-telegram" aria-hidden="true"></i>
                  <a href="@aa">amir_81dp</a>
                </p>
              </div>



            </div>

          </div>
        </section>
        <!-- end -->

      </main>


@stop
