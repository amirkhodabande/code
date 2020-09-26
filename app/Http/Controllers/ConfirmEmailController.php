<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ConfirmEmailController extends Controller
{
    public function index()
    {
        // $token = request('token');

        $user = User::where('confirm_token', request('token'))->first();

        if ($user) {
            $user->confirm();
            session()->flash('تبریک', 'ایمیل شما تایید شد.');
            return redirect('/');
        } else {
            session()->flash('خطا', 'عبارت تایید سازگار نیست.');
            return redirect("/");
        }
    }
}
