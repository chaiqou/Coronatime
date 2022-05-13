<?php

namespace App\Http\Controllers;

use App\Mail\SignupEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
	// show confirm email message page
	public function create()
	{
		return view('mail.confirmation');
	}

	// send signup email

	public static function sendSignupEmail($username, $email, $verification_code)
	{
		$data = [
			'email'             => $email,
			'verification_code' => $verification_code,
		];

		Mail::to($email)->send(new SignupEmail($data));
	}
}
