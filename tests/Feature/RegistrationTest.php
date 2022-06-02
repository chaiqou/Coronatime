<?php

namespace Tests\Feature;

use Tests\TestCase;

class RegistrationTest extends TestCase
{
	public function test_registration_screen_can_be_rendered()
	{
		$response = $this->get(route('user.registration.form'))
			->assertSee('Welcome to the Coronatime')
			->assertSuccessful();
	}

	public function test_new_users_can_register()
	{
		$response = $this->post('/register', [
			'username'                  => 'chaiqou',
			'email'                     => 'test@example.com',
			'password'                  => 'password',
			'password_confirmation'     => 'password',
		])->assertRedirect('/mail-confirmation');

		$this->assertDatabaseHas('users', ['email' => 'test@example.com']);
	}
}
