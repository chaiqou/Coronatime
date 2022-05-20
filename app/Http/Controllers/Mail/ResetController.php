<?php

namespace App\Http\Controllers\Mail;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\ResetPasswordRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Password;

class ResetController extends Controller
{
	public function index(Request $request, int $token = null): View
	{
		return view('password.reset-password')
				   ->with(['token' => $token, 'email' => $request->email]);
	}

	public function updatedPassword(): View
	{
		return view('password.updated-password');
	}

	public function resetPassword(ResetPasswordRequest $request): RedirectResponse
	{
		$validated = $request->validated();

		$check_if_token_exists = DB::table('password_resets')
		->where([
			'email' => $request->email,
			'token' => $request->token, ])
		->first();

		/* Update user password */

		if (!$check_if_token_exists)
		{
			return back();
		}
		else
		{
			User::where('email', $request->email)->update([
				'password' => bcrypt($request->password),
			]);

			/* After updating password delete password reset token */

			DB::table('password_resets')
			->where(['email' => $request->email])
			->delete();

			return redirect()->route('updated.password');
		}
	}
}
