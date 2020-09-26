@extends('layouts.app')

@section('header')
<header class="h-halfscreen bg-img bg-fixed" style="background-image: url({{ asset('assets/img/bg-laptop.jpg') }})"></header>
@stop

@section('content')
<section class="mt-3 container shadow d-flex justify-content-center p-5">
    <div class="card card-shadowed p-50 w-400 mb-0 ">
      <h5 class="text-uppercase text-center">افزودن سورس</h5>
      <br><br>

      <form class="form-type-material" method="POST" action="{{ route('store-sour') }}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group">
          <input type="text" class="form-control" placeholder="عنوان سورس" name="title">
        </div>

        <div class="form-group">
            <select  class="form-control" placeholder="دسته سورس" name="cat">
                <option value="laravel">لاراول</option>
                <option value="js">جاوا اسکریپت</option>
                <option value="html">html</option>
            </select>
          </div>

        <div class="form-group">
            <input type="file" class="form-control" name="image">
        </div>

        <div class="form-group">
          <textarea class="form-control"  placeholder="توضیحات" name="description" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="ادرس فایل سورس" name="file">
          </div>

        <br>
        <button class="btn btn-bold btn-block btn-primary" type="submit">افزودن</button>
      </form>

      <hr class="w-30">

      <p class="text-center text-muted fs-13 mt-20">تا به حال ثبت نام نکرده اید؟<a href="{{ route('register') }}">ثبت نام</a></p>
    </div>
</section>
<section class="container">
    <ul class="list-group">
        @isset($source)
            @foreach($source as $s)
            <li class="list-group-item">
                <a href="/admin/source/{{ $s->id }}">{{ $s->title }}</a>
            </li>
            @endforeach
        @endisset
    </ul>
</section>
    @stop



