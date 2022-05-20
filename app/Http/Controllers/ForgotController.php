<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

class ForgotController extends Controller
{
	public function index(): View
	{
		return view('password.forgot-password');
	}

	// send reset link

	public function sendResetLink(Request $request): RedirectResponse
	{
		// validate
		$request->validate([
			'email' => 'required|email|exists:users,email',
		]);

		// generate token
		$token = Str::random(64);

		// inster credentials in password_resets table
		DB::table('password_resets')->insert([
			'email'      => $request->email,
			'token'      => $token,
			'created_at' => Carbon::now(),
		]);

		$action_link = route('reset.password.form', ['token' => $token, 'email' => $request->email]);
		$body = 'Reset password';

		Mail::send('mail/email-forgot', ['action_link' => $action_link, 'body' => $body], function ($message) use ($request) {
			$message->from('coronatime@gmail.com', 'Coronatime');
			$message->to($request->email, 'Coronatime')
					->subject('Reset Password');
		});

		return redirect('/mail-confirmation');
	}
}
