<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Http\Requests\ForgotPasswordRequest;

class ForgotPasswordEmail extends Mailable
{
	use Queueable, SerializesModels;

	private $oken;

	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	public function __construct($token)
	{
		$this->token = $token;
	}

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build(ForgotPasswordRequest $request)
	{
		$action_link = route('reset.password.form', ['token' => $this->token, 'email' => $request->email]);
		return $this->view('mail/email-forgot', ['action_link' => $action_link, 'body' => 'Check your password reset link'], function ($message) use ($request) {
		});
	}
}
