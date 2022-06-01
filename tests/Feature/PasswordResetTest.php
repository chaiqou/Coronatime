<?php

namespace Tests\Feature;

use Tests\TestCase;

class PasswordResetTest extends TestCase
{
	public function test_reset_password_link_screen_can_be_rendered()
	{
		$response = $this->get(route('forgot.password.form'))
		->assertSee('Reset Password')
		->assertSuccessful();
	}
}
