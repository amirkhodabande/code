@extends('layouts.app')

  <!-- Header -->
  @section('header')
  <header class="header header-inverse h-fullscreen" style="background-image: url({{ asset('assets/img/bg-laptop.jpg') }})"
    data-overlay="8">
    <div class="container text-center">
      <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2">
          <h1 data-aos="flip-up">CodeLearn</h1>
          <p class="fs-18 opacity-70" data-aos="slide-up">
            دوره هایی هیجان انگیز
          </p>
        </div>
      </div>
    </div>
  </header>
  @stop
  <!-- END Header -->
  <!-- End -->

  @section('content')
  <!-- Main container -->
  <main class="main-content">
    <section class="section pb-0 bg-img-fixed text-white"
     style=" background-image: linear-gradient(10deg,rgb(216, 154, 231) 50%,rgb(88, 155, 255) 70%);">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 pb-70 order-2 order-lg-1">
            <h2>{{ $series->title }}</h2>
            <p>
                دوره های ما تا جای ممکن کاربردی شده اند به گونه ایی که تا جایی که میتوانستیم از بیان مسائل تئوری و بی فایده پرهیز کرده ایم و این به معنی این است که شما در کمترین زمان میتوانید بیشترین موارد را اموزش ببینیید.
            </p>

            <hr class="w-50 ml-0" />

            <div class="d-md-flex justify-content-center text-center">
              <div class="ml-10 text-left col-12 col-md-6">
                <p class="fs-30"><i class="fa fa-book"></i></p>
                <h6 class="text-uppercase fw-600">پر محتوا</h6>
                <p>
                  شاید برخی از شما فکر کنید که چون ما مسائل تئوری را بیان نمیکنیم به این معناست که میخاهیم محتوا را کم کنیم ولی اینطور نیست. بلکه ما برای افزایش محتوا مسائل تئوری را تا جای ممکن حذف کرده این.
                </p>
              </div>

              <div class="mr-10 text-left col-12 col-md-6">
                <p class="fs-30"><i class="fa fa-magic"></i></p>
                <h6 class="text-uppercase fw-600">ساده </h6>
                <p>
                  ویدئو های ما تمام توضیحات به زبان ساده توضیح داده شده اند و همینطور از نظر زمان ویدئو ها ما استاندارد را رعایت کرده ایم و هر ویدئو زمان کمی دارد تا شما به راحتی تمام محتوا را درک کنید.
                </p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 align-self-end text-center d-md-block d-lg-none order-0">
            <img src="{{ asset($series->image) }}" alt="..." data-aos="zoom-in" />
          </div>

          <div class="col-12 col-md-6 align-self-end text-center d-none d-lg-block order-2 mb-100">
            <img src="{{ asset($series->image) }}" alt="..." data-aos="flip-up" />
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
      <p class="h1 text-sky-down">یادگیری</p>
      <h3 class=" text-sky-down">
        لیست اموزش های دوره
        <span class="text-primary" data-type="{{ $series->title }}"></span>
      </h3>

    </div>
  </header>
  <!-- End -->

  <!-- Download -->
  <article class="container mt-5 d-flex justify-content-center">
    <section class="col-lg-10">
      <p class="h2 text-center mb-5">{{ $series->title }}</p>
      <div class=" text-justify">
        <p>
            {{  $series->description }}
        </p>

{{-- Lessons --}}

<section class="mt-100 mb-50 section container shadow">
    <ul class="list-group border-0 ">
        @forelse($series->lessons as $l)
                <a class="list-group-item border-0 my-1 shadow-sm" href="{{ route('lesson-show', $l->id) }}">{{ $l->title }}</a>
         @empty
         <li class="list-group-item border-0">
            <a href="/">فعلا ویدئویی برای این دوره ثبت نشده است.
                <small>بازگشت به خانه</small>
            </a>
        </li>
        @endforelse
    </ul>
</section>

{{-- end --}}


  </article>
  <!-- End -->

@stop
