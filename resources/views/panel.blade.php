@extends('layouts.app')

@section('header')
<header class="h-halfscreen bg-img bg-fixed" style="background-image: url({{ asset('assets/img/bg-laptop.jpg') }})"></header>
@stop

@section('content')

    <section class="section bg-gray" id="section-vtab">
        <div class="container">

          <div class="row gap-5">
                @php
                    $edit = false;
                    $ad = false;
                    if ($_SERVER['REQUEST_URI'] == "/panel/$panel->emailslug?b") {
                        $edit = true;
                    }
                    if($_SERVER['REQUEST_URI'] == "/panel/$panel->emailslug?ad") {
                        $ad = true;
                    }
                @endphp
            <div class="col-12 col-md-4">
              <ul class="nav nav-vertical">
                <li class="nav-item">
                  <a class="nav-link @if(!$edit && !$ad) active @endif " data-toggle="tab" href="#profile">
                    <h6>پروفایل</h6>
                    <p>اطلاعات شما</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#likes">
                    <h6>علاقه مندی ها</h6>
                    <p> اطلاعاتی راجب رای های شما به اموزش ها</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link @if($edit) active @endif" data-toggle="tab" href="#blogs">
                    <h6>بلاگ ها</h6>
                    <p> در این قسمت میتوانید بلاگ های خود را مدیریت کنید</p>
                  </a>
                </li>

                @if($panel->isAdmin())
                       <li class="nav-item">
                        <a class="nav-link @if($ad) active @endif" data-toggle="tab" href="#admin">
                            <h6>ادمین</h6>
                            <p> ادمین</p>
                        </a>
                    </li>
                @endif

              </ul>
            </div>

            <div class="col-12 col-md-8 align-self-center">
              <div class="tab-content">



                <div class="tab-pane fade show @if(!$edit && !$ad) active @endif" id="profile">
                    <form action="{{ route('panel.update', $panel->emailslug) }}"  method="POST">
                            {{ csrf_field() }}
                            {{ method_field("PATCH") }}
                            <div class="form-group">
                                <label for="name">نام</label>
                                <input id="name" type="text" name="name" value="{{ $panel->name }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="form-control btn btn-outline-primary">ویرایش</button>
                            </div>

                              <div class="form-group">
                                <label>ایمیل</label>
                                <p class="form-control"> {{ $panel->email }} </p>
                            </div>
                             <div class="form-group">
                                <label>وضعیت اکانت</label>
                                @if($panel->confirm_token !== null)
                                    <p class="form-control"> هنوز ایمیل خود را تایید نکرده اید. اگر تا کنون ایمیلی برای شما ارسال نشده است لطفا کمی منتظر بمانید. </p>
                                @else
                                    <p class="form-control border-success">اکانت شما با موفقیت تایید شده است.</p>
                                @endif
                            </div>

                        </form>
                </div>

                 <div class="tab-pane fade show" id="likes">
                            <div class="form-group">
                                <label> تعداد کل رای ها</label>
                                <p  class="form-control">{{ $panel->votes->count() }}</p>
                            </div>

                              <div class="form-group">
                                <label> تعداد رای های مثبت</label>
                                <p class="form-control">
                                    @php
                                        $c =0; $cDown = 0;
                                    @endphp
                                     @foreach($panel->votes as $votes)
                                        @foreach($lessons as $l)
                                            @if( $votes->type == 'up' && $votes->voteable_type == 'App\Lesson' && $l->id == $votes->voteable_id)
                                                @php
                                                    $c ++;
                                                @endphp
                                            @endif
                                        @endforeach
                                    @endforeach
                                    @if($c > 0)
                                        {{ $c }}
                                    @else
                                        شما هنوز رای ثبت شده ایی ندارید.
                                        @endif
                                </p>
                            </div>

                            <div class="form-group">
                                <label> تعداد رای های منفی</label>
                                <p class="form-control">
                                     @foreach($panel->votes as $votes)
                                        @foreach($lessons as $l)
                                            @if( $votes->type == 'down' && $votes->voteable_type == 'App\Lesson' && $l->id == $votes->voteable_id)
                                                @php
                                                    $cDown ++;
                                                @endphp
                                            @endif
                                        @endforeach
                                    @endforeach
                                    @if($cDown > 0)
                                        {{ $cDown }}
                                    @else
                                        شما هنوز رای ثبت شده ایی ندارید.
                                        @endif
                                </p>
                            </div>

                            <div class="form-group">
                                <label>اموزش هایی که دوست داشتید</label>
                                <ul class="list-group">
                                    @php
                                        $c =0; $cDown = 0;
                                    @endphp
                                     @foreach($panel->votes as $votes)
                                        @foreach($lessons as $l)
                                            @if( $votes->type == 'up' && $votes->voteable_type == 'App\Lesson' && $l->id == $votes->voteable_id)
                                                <a class="list-group-item" href="{{ route('lesson-show', $l->id) }}"> {{ $l->title }} </a>
                                            @endif
                                        @endforeach
                                    @endforeach

                                </ul>
                            </div>
                            <div class="list-group">
                                <label>اموزش هایی که دوست نداشتید</label>
                                <ul class="list-group">
                                    @php
                                        $c =0; $cDown = 0;
                                    @endphp
                                     @foreach($panel->votes as $votes)
                                        @foreach($lessons as $l)
                                            @if( $votes->type == 'down' && $votes->voteable_type == 'App\Lesson' && $l->id == $votes->voteable_id)
                                                <a class="list-group-item" href="{{ route('lesson-show', $l->id) }}"> {{ $l->title }} </a>
                                            @endif
                                        @endforeach
                                    @endforeach

                                </ul>
                            </div>

                </div>

                 <div class="tab-pane fade show @if($edit) active @endif" id="blogs">
                    @if($panel->confirm_token == null)
                        <label class="alert alert-danger">خطای دسترسی</label>
                        <p class="form-control">لطفا ابتدا حساب خود را تایید کنید.</p>
                    @else
                        <form action="{{ route('panel.store') }}"  method="POST">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="title">عنوان</label>
                                    <input id="title" type="text" name="title" placeholder="عنوان بلاگ خهود را وارد کنید" class="form-control">
                                     @if ($errors->has('title'))
                                        <span class="alert alert-danger form-control">
                                                <small> {{ $errors->first('title') }}</small>
                                            </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="description">توضیح</label>
                                    <input id="description" type="text" name="description" placeholder="توضیحی راجب بلاگ خود دهید." class="form-control">
                                      @if ($errors->has('description'))
                                        <span class="alert alert-danger form-control">
                                                <small> {{ $errors->first('description') }}</small>
                                            </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="url">ادرس</label>
                                    <input id="url" type="text" name="url" placeholder="ادرس بلاگ خود را وارد کنید." class="form-control">
                                      @if ($errors->has('url'))
                                        <span class="alert alert-danger form-control">
                                                <small> {{ $errors->first('url') }}</small>
                                            </span>
                                    @endif
                                </div>

                                <div class="form-group text-center">
                                <button type="submit" class=" w-half btn btn-success">افزودن</button>
                                </div>
                            </form>

                            <section class="card">
                                <header class="card-header">
                                    بلاگ های شما
                                    <small>بلاگ های شما بعد از تایید محتوا به حالت فعال تغییر میکنند.</small>
                                </header>
                                <main class="card-body ">
                                    @if($panel->blogs->count() > 0)
                                        @foreach ($panel->blogs as $blog)
                                            <a href="/#blogs" class="btn btn-outline-warning col-12 col-md-3">
                                                <p class="card-header">{{ $blog->title }}</p>
                                                <p class="card-body @if($blog->status == 'dis') bg-danger @else bg-primary @endif">
                                                    @if($blog->status == 'act')
                                                        فعال
                                                    @else
                                                        غیر فعال
                                                    @endif
                                                </p>
                                            </a>
                                        @endforeach
                                    @else
                                        <p>شما هنوز بلاگی اضافه نکرده اید.</p>
                                    @endif
                                </main>
                            </section>
                    @endif
                </div>


@if($panel->isAdmin())
                <div class="tab-pane fade show @if($ad) active @endif " id="admin">

                            @foreach($allBlogs as $b)
                            <a href="{{ $b->url }}">{{ $b->title }}</a>
                                <form action="{{ route('panel_blog.update', $b->id) }}"  method="POST" >
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}
                                    <div class="form-group d-flex  my-50 py-20 shadow-sm">
                                        <label for="status" class="col-12 col-md-2 btn btn-sm @if($b->status == "act") btn-primary @else btn-danger @endif">
                                            {{ $b->status }}</label>

                                            <select name="status" class="form-control col-12 col-md-4">
                                                <option value="act" @if($b->status == "act") selected @endif>act</option>
                                                <option value="dis" @if($b->status == "dis") selected @endif>dis</option>
                                            </select>
                                            <input type="text" value="{{ $b->image }}" placeholder="لطفا ادرس عکس را وارد کنید" name="image" class="form-control col-12 col-md-4">
                                            <button type="submit" class="btn btn-sm btn-success col-md-2">ویرایش</button>
                                    </div>
                                </form>
                            @endforeach
                </div>
                @endif

              </div>
            </div>


          </div>

        </div>
      </section>

@stop


