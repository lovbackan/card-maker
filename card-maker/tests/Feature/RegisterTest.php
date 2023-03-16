<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    public function test_view_register_form()
    {
        $response = $this->get('/');
        $response->assertSeeText('Name');
        $response->assertStatus(200);
    }
    /** @test */
    public function register_user()
    {
        $response = $this
            ->post('createAccount', [
                'name' => 'yrgo',
                'email' => 'example@yrgo.se',
                'password' => '12345678',
            ]);

        $this->assertDatabaseHas('users', [
            'name' => 'yrgo',
            'email' => 'example@yrgo.se',
        ]);

        $user = User::where('email', 'example@yrgo.se')->first();
        $this->assertTrue(Hash::check('12345678', $user->password));
    }
}
