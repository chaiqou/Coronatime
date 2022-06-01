<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Providers\RouteServiceProvider;

class AuthenticationTest extends TestCase
{
	public function test_login_screen_can_be_rendered()
	{
		$response = $this->get(route('user.login.form'))
			->assertSee('Welcome back')
			->assertSuccessful();
	}

	public function test_users_can_authenticate()
	{
		$user = User::factory()->create();

		$response = $this->post('/login', [
			'email'    => $user->email,
			'password' => 'password', ])
		->assertRedirect(RouteServiceProvider::HOME);
	}

	public function test_users_can_not_authenticate_with_invalid_password()
	{
		$user = User::factory()->create();

		$this->post('/login', [
			'email'    => $user->email,
			'password' => 'wrong-password',
		]);

		$this->assertGuest();
	}

	public function test_users_duplication()
	{
		$user = User::factory()->make(['username' => 'nikoloz', 'password' => '123456']);
		$user2 = User::factory()->make(['username' => 'mariam', 'password' => '123456']);

		$this->assertTrue($user != $user2);
	}
}
