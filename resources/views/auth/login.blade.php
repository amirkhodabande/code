@extends('layouts.app')

@section('header')
<header class="h-halfscreen bg-img bg-fixed" style="background-image: url({{ asset('assets/img/bg-laptop.jpg') }})"></header>
@stop

@section('content')
<section class="mt-3 container shadow d-flex justify-content-center p-5">
    <div class="card card-shadowed p-50 w-400 mb-0 ">
      <h5 class="text-uppercase text-center">ورود</h5>
      <br><br>

      <form class="form-type-material" method="POST" action="/login">
        {{ csrf_field() }}

        <div class="form-group">
          <input type="text" class="form-control" placeholder="آدرس ایمیل" name="email">
          @if ($errors->has('email'))
          <span class="alert alert-danger form-control">
                  <small> {{ $errors->first('email') }}</small>
             </span>
            @endif
        </div>

        <div class="form-group">
          <input type="password" class="form-control" placeholder="رمز عبور" name="password">
            @if ($errors->has('password'))
             <span class="alert alert-danger form-control">
                   <small>{{ $errors->first('password') }}</small>
             </span>
            @endif
        </div>

        <br>
        <button class="btn btn-bold btn-block btn-primary" type="submit">ورود</button>
      </form>

      <hr class="w-30">

      <p class="text-center text-muted fs-13 mt-20">تا به حال ثبت نام نکرده اید؟<a href="{{ route('register') }}">ثبت نام</a></p>
    </div>
</section>
    @stop



