<?php

namespace App\Http\Controllers;

class MailController extends Controller
{
	// show confirm email message page
	public function create()
	{
		return view('email.confirmation');
	}
}
