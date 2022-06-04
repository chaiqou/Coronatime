<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\PasswordReset;

class VerificationTest extends TestCase
{
	public function test_if_user_verified()
	{
		$this->withoutExceptionHandling();

		$password = PasswordReset::factory()->create(['email' => 'lomtadzenikusha@gmail.com', 'token' => 123]);

		$response = $this->post(route('reset.password'), [
			'email'                 => $password->email,
			'token'                 => $password->token,
			'password'              => 123,
			'password_confirmation' => 123,
		]);

		$this->assertDatabaseMissing('password_resets', [
			'email' => $password->email,
			'token' => $password->token,
		]);

		$response->assertRedirect(route('updated.password'));
	}
}
