<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class CreateCardTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_creates_a_new_card_for_authenticated_user()
    {
        // create a user and log in
        $user = User::factory()->create();
        $this->actingAs($user);

        // make a POST request to the CreateCardController
        $response = $this->post('createCard', [
            'category' => 'Character',
            'title' => 'Example Title',
            'body' => 'Example Body'
        ]);

        // assert that the card was created successfully
        $response->assertStatus(302);
        $response->assertSessionHas('message', 'Card created successfully!');
    }
}
