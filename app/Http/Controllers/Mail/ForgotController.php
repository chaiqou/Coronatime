<?php

namespace App\Http\Controllers\Mail;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ForgotPasswordRequest;

class ForgotController extends Controller
{
	public function forgotPasswordEmail(ForgotPasswordRequest $request): RedirectResponse
	{
		$validated = $request->validated();

		$token = Str::random(64);

		/* inster credentials inside password_resets table **/

		DB::table('password_resets')->insert([
			'email'      => $request->email,
			'token'      => $token,
			'created_at' => now(),
		]);

		$action_link = route('reset.password.form', ['token' => $token, 'email' => $request->email]);
		$body = 'Check your password reset link';

		Mail::send('mail/email-forgot', ['action_link' => $action_link, 'body' => $body], function ($message) use ($request) {
			$message->from('nikolozlomtadze@gmail.com', 'Coronatime');
			$message->to($request->email, 'Coronatime')
					->subject('Password reset');
		});

		return redirect()->route('mail.confirmation');
	}
}
