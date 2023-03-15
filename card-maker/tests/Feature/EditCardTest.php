<?php

namespace Tests\Feature;

use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;


class EditCardTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    /** @test */
    use RefreshDatabase;
    public function edit_card(): void
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

        $response->assertStatus(200);
        $response->assertViewIs('dashboard');

        $response = $this
            ->followingRedirects()
            ->post('createCard', [
                'category' => 'Character',
                'title' => 'Test Card Title',
                'body' => 'Test Card Body'
            ]);

        $this->assertDatabaseHas('cards', [
            'user_id' => $user->id,
            'card_category' => 1,
            'title' => 'Test Card Title',
            'body' => 'Test Card Body'
        ]);

        $response = $this
            ->post('editCard', [
                'cardSelector' => 'Test Card Title',
                'category' => 'Character',
                'title' => 'Test Card Title',
                'body' => 'Test Card Body, does this edit work?'
            ]);

        $this->assertDatabaseHas('cards', [
            'user_id' => $user->id,
            'card_category' => 1,
            'title' => 'Test Card Title',
            'body' => 'Test Card Body, does this edit work?'
        ]);
    }
}
