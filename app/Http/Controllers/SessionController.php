<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
	// show login page
	public function create()
	{
		return view('login.main');
	}

	//log in user based on provided credentials
	public function store()
	{
		// validate
		$attributes = request()->validate([
			'username' => 'required|exists:users,username',
			'password' => 'required',
		]);

		// attempt login user if all provided attributes are true
		if (auth()->attempt($attributes))
		{
			session()->regenerate();
			return redirect('/gg');
		}

		// if validate failed
		throw ValidationException::withMessages([
			'password' => 'Your provided credentials could not be verified',
		]);
	}
}
