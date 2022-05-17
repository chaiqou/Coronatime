<?php

namespace App\Http\Controllers;

use App\Models\Country;

class CountriesController extends Controller
{
	public function create()
	{
		$country = new Country();

		$state = [
			'confirmed' => $country->sum('confirmed'),
			'deaths'    => $country->sum('deaths'),
			'recovered' => $country->sum('recovered'),
		];

		// return $AllCountry;
		return view('dashboard.main', ['state' => $state]);
	}
}
