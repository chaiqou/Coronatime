<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class CountryController extends Controller
{
	public function worldwide(): View
	{
		$covidStatisticSum = [
			'confirmed' => number_format(Country::sum('confirmed')),
			'deaths'    => number_format(Country::sum('deaths')),
			'recovered' => number_format(Country::sum('recovered')),
		];

		return view('dashboard.main', ['covidStatisticSum' => $covidStatisticSum]);
	}

	public function byCountry(Request $request): View
	{
		$country = Country::query();

		if (request('search'))
		{
			$country->where('name', 'like', '%' . request('search') . '%')
				->orWhere('name_geo', 'like', '%' . request('search') . '%');
		}

		$covidStatisticSum = [
			'confirmed' => $country->sum('confirmed'),
			'deaths'    => $country->sum('deaths'),
			'recovered' => $country->sum('recovered'),
		];

		if ($sort = $request->input('sort'))
		{
			$country->orderBy($request->input('name'), $sort);
		}

		return view('dashboard.by-country', ['covidStatisticSum' => $covidStatisticSum, 'countries'  => $country->get()]);
	}
}
