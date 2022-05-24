<?php

namespace App\Http\Controllers\Mail;

use App\Models\User;
use App\Mail\SignupEmail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;

class MailController extends Controller
{
	public static function sendSignupEmail($username, $email, $verification_code)
	{
		$data = [
			'email'             => $email,
			'verification_code' => $verification_code,
		];

		Mail::to($email)->send(new SignupEmail($data));
	}

	public function verification()
	{
		$verification_code = Request::get('code');
		$user = User::where(['verification_code' => $verification_code])->first();

		/*  if user !== 0 then mark as verified user in database */

		if ($user != null)
		{
			$user->is_verified = 1;
			$user->save();
			return redirect()->route('mail.confirmation');
		}
		else
		{
			return redirect()->route('user.registration.form');
		}
	}
}
