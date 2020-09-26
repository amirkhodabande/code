<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_correct_response_after_user_logs_in()
    {
        $user = factory(User::class)->create();


        $this->postJson('/login', [
            'email' => $user->email,
            'password' => 'password'
        ])
            ->assertJson([
                'status' => 'ok',
            ])->assertSessionHas('تبریک', 'ثبت با موفقیت انجام شد');
    }

    public function test_a_user_receives_correct_message_when_passing_in_wrong_credentials()
    {
        $user = factory(User::class)->create();

        $this->postJson('/login', [
            'email' => $user->email,
            'password' => 'aaa'
        ])->assertStatus(422)
            ->assertJson([
                'message' => 'اطلاعات موجود نیست.',
            ]);
    }
}
