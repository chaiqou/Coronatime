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

	public function country()
	{
		$countries = Country::latest();
		if (request('search'))
		{
			$countries->where('name', 'like', '%' . request('search') . '%');
		}

		$country = new Country();

		$worldwide = [
			'confirmed' => $country->sum('confirmed'),
			'deaths'    => $country->sum('deaths'),
			'recovered' => $country->sum('recovered'),
		];

		return view('dashboard.by-country', ['worldwide' => $worldwide, 'countries'  => $countries->get()->sortBy('name')]);
	}
}
