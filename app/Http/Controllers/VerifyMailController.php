<?php

namespace App\Http\Controllers;

use App\Mail\SignupEmail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;

class VerifyMailController extends Controller
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

	// verify email
	public function verify()
	{
		$verification_code = Request::get('code');
		$user = User::where(['verification_code' => $verification_code])->first();

		// if user !== 0 then mark as verified user in database
		if ($user != null)
		{
			$user->is_verified = 1;
			$user->save();
			return view('mail.confirmed');
		}

		return redirect()->route('/');
	}
}
