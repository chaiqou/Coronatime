<?php

namespace App\Http\Controllers\Mail;

use Illuminate\Support\Str;
use App\Mail\ForgotPasswordEmail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ForgotPasswordRequest;

class ForgetPasswordController extends Controller
{
	public function forgotPasswordEmail(ForgotPasswordRequest $request): RedirectResponse
	{
		$token = Str::random(64);

		DB::table('password_resets')->insert([
			'email'      => $request->email,
			'token'      => $token,
			'created_at' => now(),
		]);

		Mail::to($request->email)->send(new ForgotPasswordEmail($token));

		return redirect()->route('mail.confirmation');
	}
}
