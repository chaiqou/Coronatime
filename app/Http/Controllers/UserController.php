<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
	// Show register form/create Form

	public function create()
	{
		return view('register.main');
	}

	public function register(Request $request)
	{
		// create new user

		$user = new User();
		$user->username = $request->username;
		$user->email = $request->email;
		$user->password = Hash::make($request->password);
		$user->verification_code = sha1(time());
		$user->save();

		if ($user != null)
		{
			// if user created and !== null , then send email

			MailController::sendSignupEmail($user->username, $user->email, $user->verification_code);

			// after send email redirect to email confirmation page
			return redirect('/mail-confirmation');
		}

		// if user doesn't created redirect back with error message
		return redirect()->back()->with(session()->flash('alert-danger', 'Something went wrong!'));
	}
}
