<?php

namespace App\Http\Controllers\Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class LanguageController extends Controller
{
	public function switctchLanguageLocale($locale): RedirectResponse
	{
		session()->put('locale', $locale);
		return redirect()->back();
	}
}
