<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SignInTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function sign_in_can_be_completed_with_the_correct_details()
    {
        $user = User::factory()->create();

        $this->assertNull(auth()->user());

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password', // default in factory
        ])->assertRedirect('/');

        $this->assertNotNull(auth()->user());
    }

    /** @test */
    public function sign_in_cannot_be_completed_with_the_incorrect_details()
    {
        $user = User::factory()->create();

        $this->assertNull(auth()->user());

        $this->get('/login');
        $response = $this->followingRedirects()->post('/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $response->assertSee($user->email);
        $response->assertSee('Kunde inte logga in med dessa användaruppgifter.');

        $this->assertNull(auth()->user());
    }

    /** @test */
    public function exclamation_point_still_points_to_landing_page()
    {
        $this->get('!')->assertRedirect('');
    }
}
