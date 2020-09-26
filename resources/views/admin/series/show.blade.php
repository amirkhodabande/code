@extends('layouts.app')

@section('header')
<header class="h-halfscreen bg-img bg-fixed" style="background-image: url({{ asset('assets/img/bg-laptop.jpg') }})"></header>
@stop

@section('content')
<section class="mt-3 container shadow d-flex justify-content-center p-5">
    <div class="card card-shadowed p-50 w-400 mb-0 ">
      <h5 class="text-uppercase text-center"> افزودن اموزش</h5>
      <small>{{ $series->slug }}</small>
      <br><br>

      <form class="form-type-material" method="POST" action="/admin/{{ $series->id }}/lesson" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group">
          <input type="text" class="form-control" placeholder="عنوان اموزش" name="title">
        </div>

        <div class="form-group">
            <small>در قسمت کد اسکریپت در اپارات ای دی div را وارد کنید</small>
            <input type="text" class="form-control" placeholder="ای دی ویدیو" name="video_id">
        </div>
            <div class="form-group">
                <small>محتوای موجود در src را وارد کنید</small>
            <input type="text" class="form-control" placeholder="ادرس ویدیو" name="video_url">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="قسمت اموزش" name="episode_number">
        </div>


        <div class="form-group">
          <textarea class="form-control"  placeholder="توضیحات" name="description" cols="30" rows="10"></textarea>
        </div>

        <br>
        <button class="btn btn-bold btn-block btn-primary" type="submit">افزودن</button>
      </form>

      <hr class="w-30">
    </div>
</section>
<section class="container">
    <ul class="list-group">
        @foreach($series->lessons as $l)
        <li class="list-group-item">
            <a href="{{ route('delete-lesson', $l->id) }}" class="btn btn-sm btn-danger">Delete</a>
            {{ $l->title }}
        </li>
        @endforeach
    </ul>
</section>
    @stop



