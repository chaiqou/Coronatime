<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;

class LogoutTest extends TestCase
{
	public function test_can_a_user_logout()
	{
		$user = User::factory()->create();
		$this->be($user);

		$this->post(route('user.logout'))
		->assertRedirect(route('user.login.form'));

		$this->assertGuest();
	}
}
