<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Event;

class VerificationTest extends TestCase
{
	public function test_if_user_verified()
	{
		Event::fake();

		$user = User::factory()->create();
		$response = $this
			->get(route('reset.password'));

		$this->assertDatabaseMissing('password_resets', [
			'token' => $user->token,
		]);

		$response->assertStatus(405);
	}
}
