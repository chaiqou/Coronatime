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
		//validate
		$attributes = request()->validate([
			'username' => 'required|exists:users,username',
			'password' => 'required',
		]);

		// attempt login user if all provided attributes are true
		if (auth()->attempt($attributes))
		{
			// if user is_verified column === 1 then log in user
			if (Auth::user()->is_verified == 1)
			{
				session()->regenerate();
				return redirect('/gg');
			}
		}

		// if validate failed
		throw ValidationException::withMessages([
			'password' => 'Your provided credentials could not be verified',
		]);
	}
}
