<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function test_view_login_form()
    {
        $response = $this->get('/');
        $response->assertSeeText('Email');
        $response->assertStatus(200);
    }

    public function test_login_user()
    {
        $user = new User();
        $user->name = 'Mr Robot';
        $user->email = 'example@yrgo.se';
        $user->password = Hash::make('123');
        $user->save();

        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email' => 'example@yrgo.se',
                'password' => '123',
            ]);

        $response->assertViewIs('dashboard');
        $response->assertStatus(200);
    }

    public function test_login_user_with_wrong_password()
    {
        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email' => 'example@yrgo.se',
                'password' => '234'

            ]);

        $response->assertSeeText('Whoops! Please try to login again.');
    }
}
