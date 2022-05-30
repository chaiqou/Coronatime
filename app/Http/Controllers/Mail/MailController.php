<?php

namespace App\Http\Controllers\Mail;

use App\Models\User;
use App\Mail\SignupEmail;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;

class MailController extends Controller
{
	public static function sendSignupEmail(string $username, string $email, string $verification_code)
	{
		$data = [
			'email'             => $email,
			'verification_code' => $verification_code,
		];

		Mail::to($email)->send(new SignupEmail($data));
	}

	public function verification(): RedirectResponse
	{
		$verification_code = Request::get('code');
		$user = User::where(['verification_code' => $verification_code])->first();

		if ($user != null)
		{
			$user->is_verified = 1;
			$user->save();
			return redirect()->route('mail.confirmed');
		}
		else
		{
			return redirect()->route('user.registration.form');
		}
	}
}
