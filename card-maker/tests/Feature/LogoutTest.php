<?php

namespace Tests\Feature;

use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Tests\TestCase;

class LogoutTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_logout()
    {
        $user = new User();
        $user->name = 'Mr Robot';
        $user->email = 'example@yrgo.se';
        $user->password = Hash::make('123');
        $user->save();

        $this->actingAs($user);

        // Visit the dashboard page
        $response = $this->get('/dashboard');

        // Check that we're on the dashboard page
        $response->assertStatus(200);
        $response->assertViewIs('dashboard');

        //  Click the logout button
        $response = $this->get('/logout');

        //  Check that we're redirected to the home page
        $response->assertRedirect('/');
    }
}
