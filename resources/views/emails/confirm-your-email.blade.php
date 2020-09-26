@component('mail::message')

<h2 class="text-right">قدمی دیگر برای دسترسی کامل به امکانات سایت ما</h2>

<p class="text-right">لطفا ایمیل خود را تایید کنید.</p>

@component('mail::button', ['url' => route('confirm-email'). '?token='. $user->confirm_token])
تایید ایمیل
@endcomponent

ممنون,<br>

{{-- {{ config('app.name') }} --}}
@endcomponent
