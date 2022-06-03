<?php

namespace Tests\Feature;

use App\Mail\SignupEmail;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Notification;

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

	// public function test_reset_password_link_can_be_requested()
	// {
	// 	Notification::fake();

	// 	$user = User::factory()->create();

	// 	$response = $this->post('/forgot-password', [
	// 		'email' => $user->email,
	// 	]);

	// 	Notification::assertSentTo($user, SignupEmail::class);
	// }
}
