<?php

namespace App\Http\Controllers;

class ForgotPasswordController extends Controller
{
	public function create()
	{
		return view('password.forgot');
	}
}
