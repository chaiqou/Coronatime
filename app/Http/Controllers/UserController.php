<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
	// Show register form/create Form

	public function create()
	{
		return view('register.main');
	}

	// create new user and authenticate it

	public function store()
	{
		$attributes = request()->validate([
			'username' => ['required', 'min:3', Rule::unique('users', 'username')],
			'email'    => ['required', 'email', Rule::unique('users', 'email')],
			'password' => 'required|confirmed|min:3',
		]);

		// create user if validated password hashed using mutator in User model

		User::create($attributes);
	}
}
