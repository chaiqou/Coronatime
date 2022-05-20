<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
	public function index(): View
	{
		return view('login.main');
	}

	public function login(LoginRequest $request): RedirectResponse
	{
		$validated = $request->validated();

		$usernameOrEmail = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

		{
			if (auth()->attempt([$usernameOrEmail => $validated['username'], 'password' => $validated['password']], $request->remember))
			{
				if (Auth::user()->is_verified == 1)
				{
					session()->regenerate();
					return redirect()->route('dashboard.worldwide');
				}
			}
		}

		throw ValidationException::withMessages(['password' => __('message.password_error_message')]);
	}

	public function logout(Request $request): RedirectResponse
	{
		Auth::logout();

		$request->session()->invalidate();

		$request->session()->regenerateToken();

		return redirect()->route('user.login.form');
	}
}
