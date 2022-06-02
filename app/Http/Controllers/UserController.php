<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Mail\MailController;
use App\Http\Requests\RegistrationRequest;

class UserController extends Controller
{
	public function registration(RegistrationRequest $request): RedirectResponse
	{
		$user = User::create([
			'email'             => $request->email,
			'username'          => $request->username,
			'password'          => bcrypt($request->password),
			'verification_code' => sha1(time()),
		]);

		if ($user != null)
		{
			MailController::sendSignupEmail($user->username, $user->email, $user->verification_code);

			return redirect('/mail-confirmation');
		}
	}
}
