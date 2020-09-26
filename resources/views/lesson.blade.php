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
            اموزش هایی هیجان انگیز
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
  @auth
  <main class="main-content text-center">
      <header class="my-100">
          <h2>{{ $lesson->title }}</h2>
          <p>{{ $lesson->description }}</p>
        </header>


        <div id="{{ $lesson->video_id }}" class="w-half mx-auto">
            <script type="text/JavaScript"
            src="{{ $lesson->video_url }}">
         </script>
        </div>

      {{-- <video src="https://www.aparat.com/v/exJ7j" controls height="550px"></video> --}}

      <div class="mt-50 col-12">
        <vue-votes :default_votes="{{ $lesson->votes }}" entity_id="{{ $lesson->id }}" entity_owner="1"></vue-votes>
    </div>


    <div class="m-50 text-center">
            @php
                $nextLesson = $lesson->getNextLesson();
                $prevLesson = $lesson->getPrevLesson();
            @endphp
            @if($nextLesson->id !== $lesson->id)
                <a href="/{{ $nextLesson->id }}/lesson" class="btn btn-sm btn-outline-primary">
                    بعدی
                </a>
            @endif

        @if($prevLesson->id !== $lesson->id)
            <a href="/{{ $prevLesson->id }}/lesson" class="btn btn-sm btn-outline-primary">
                    قبلی
            </a>
        @endif
    </div>
    </main>

    <section class="mt-100 section container shadow">
        <ul class="list-group border-0 ">

            @php
                $les = $lesson->series->lessons()->orderBy('episode_number',  'asc')->get();
            @endphp
            @forelse($les as $l)
                <a  href="{{ route('lesson-show', $l->id) }}"
                    class="list-group-item border-0 rounded
                    @if($lesson->id == $l->id)
                        bg-liner-cus text-white
                    @endif">
                 {{ $l->episode_number }} - {{ $l->title }}
                    </a>

            @empty
            <li class="list-group-item border-0">
                <a href="#">فعلا ویدئویی برای این دوره ثبت نشده است.
                    <small>بازگشت به خانه</small>
                </a>
            </li>
            @endforelse
        </ul>
    </section>
@else
<header class="my-100 header p-0 h-400 text-white d-flex align-items-center justify-content-center bg-fixed"
style="background-image: url({{ asset('assets/img/bg-thunder.jpg') }});">
<canvas class="constellation"></canvas>
<div class="text-center">
  <p class="h1 text-sky-down">دسترسی</p>
  <h3 class=" text-sky-down">
    برای دسترسی به
    <span class="text-primary" data-type="{{ $lesson->title }}"></span>
    باید وارد شوید
  </h3>
  <h4><a href="javascript:;" data-toggle="modal" data-target="#loginModal" class="btn btn-primary mt-5">ورود</a></h4>
</div>
</header>
@endauth
  <!-- END Main container -->


  <!-- Comments Header -->
  <header class="mt-5 header p-0 h-450 text-white bg-fixed" style="background-image: url({{ asset('assets/img/bg-laptop.jpg') }});">
    <article class="bg-danger h-full w-full bg-img bg-fixed bg-linear d-flex justify-content-center align-items-center"
      style="
    background-image: linear-gradient(10deg,rgb(227, 197, 235) 50%,rgb(88, 155, 255) 70%);">
      <h2 class="h1" data-aos="fade-up">نظرات کاربران</h2>
      @auth
      @else
        <p>برای ثبت نظر باید وارد شوید</p>
     @endauth
    </article>
  </header>
  <!-- End -->

  <!-- Comments -->
  <section class="section ">
    <comments :lesson="{{ $lesson }}"></comments>
  </section>

  <!-- End -->
@stop
