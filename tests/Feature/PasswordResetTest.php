<?php

namespace Tests\Feature;

use Tests\TestCase;

class PasswordResetTest extends TestCase
{
	public function test_reset_password_link_screen_can_be_rendered()
	{
		$response = $this->get(route('reset.password.form', ['token' => 123456]));
		$response->assertSuccessful();
	}

	public function test_if_user_do_not_provided_password_auth_give_us_password_error()
	{
		$response = $this->post(route('reset.password'), [
			'password'         => '',
			'confirm_password' => '',
		]);

		$response->assertSessionHasErrors('password');
	}
}
