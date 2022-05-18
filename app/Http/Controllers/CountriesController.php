<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Support\Facades\Request;

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

		// sortp depent on condition

		if (Request::get('sort') == 'name_asc')
		{
			$countries = Country::orderBy('name', 'asc');
		}
		elseif (Request::get('sort') == 'name_desc')
		{
			$countries = Country::orderBy('name', 'desc');
		}
		elseif (Request::get('sort') == 'confirmed_asc')
		{
			$countries = Country::orderBy('confirmed', 'asc');
		}
		elseif (Request::get('sort') == 'confirmed_desc')
		{
			$countries = Country::orderBy('confirmed', 'desc');
		}
		elseif (Request::get('sort') == 'deaths_asc')
		{
			$countries = Country::orderBy('deaths', 'asc');
		}
		elseif (Request::get('sort') == 'deaths_desc')
		{
			$countries = Country::orderBy('deaths', 'desc');
		}
		elseif (Request::get('sort') == 'recovered_asc')
		{
			$countries = Country::orderBy('recovered', 'asc');
		}
		elseif (Request::get('sort') == 'recovered_desc')
		{
			$countries = Country::orderBy('recovered', 'desc');
		}

		// return view

		return view('dashboard.by-country', ['worldwide' => $worldwide, 'countries'  => $countries->get()]);
	}
}
