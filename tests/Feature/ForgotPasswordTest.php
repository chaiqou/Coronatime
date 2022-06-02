<?php

namespace Tests\Feature;

use Tests\TestCase;

class ForgotPasswordTest extends TestCase
{
	public function test_forgot_password_page_can_be_rendered()
	{
		$response = $this->get(route('forgot.password.form'))
	  ->assertSee('Reset Password')
	  ->assertSuccessful();
	}

	public function test_if_user_do_not_provided_email_auth_give_us_email_error()
	{
		$response = $this->post(route('forgot.password.link'), [
			'email'    => '',
		]);

		$response->assertSessionHasErrors('email');
	}
}
