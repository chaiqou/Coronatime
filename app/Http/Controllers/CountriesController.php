<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
	public function create()
	{
		return view('dashboard.main');
	}

	public function getCoronaCases()
	{
		$response = Http::get('https://devtest.ge/countries');
		$countries = $response->collect();
		ddd($countries);
	}
}
