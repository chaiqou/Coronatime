<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
	// show login page
	public function create()
	{
		return view('login.main');
	}

	//log in user based on provided credentials
	public function store(Request $request)
	{
		$input = $request->all();

		$validated = $request->validate([
			'username'   => 'required|min:3',
			'password'   => 'required',
		]);

		// check user auth with email? or username
		$fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

		{
		// attempt login user if all provided attributes are true
			if (auth()->attempt([$fieldType => $input['username'], 'password' => $input['password']]))
			{
				// if user is_verified column === 1 then log in user
				if (Auth::user()->is_verified == 1)
				{
					session()->regenerate();
					return redirect()->route('dashboard');
				}
			}
		}

		// if validate failed
		throw ValidationException::withMessages([
			'password' => 'Your provided credentials could not be verified',
		]);
	}

	// logout user
	public function destroy(Request $request)
	{
		Auth::logout();

		$request->session()->invalidate();

		$request->session()->regenerateToken();

		return redirect('/');
	}
}
