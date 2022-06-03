<?php

namespace Tests\Feature;

use App\Mail\ForgotPasswordEmail;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

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

	public function test_reset_password_link_can_be_requested()
	{
		$this->withoutExceptionHandling();
		Mail::fake();

		$user = User::factory()->create(
			['email' => 'lomtadzenikusha@gmail.com', 'username' => 'chaiqou']
		);

		$response = $this->post('/forgot-password', [
			'email' => $user->email,
		]);

		Mail::to('lomtadzenikusha@gmail.com')->send(new ForgotPasswordEmail('token'));
		Mail::assertSent(ForgotPasswordEmail::class);
	}
}
