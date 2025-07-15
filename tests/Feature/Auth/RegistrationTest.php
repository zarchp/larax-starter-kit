<?php

declare(strict_types=1);

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

final class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function registration_screen_can_be_rendered(): void
    {
        $testResponse = $this->get('/register');

        $testResponse->assertStatus(200);
    }

    /**
     * @test
     */
    public function new_users_can_register(): void
    {
        $testResponse = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated();
        $testResponse->assertRedirect(route('dashboard', absolute: false));
    }
}
