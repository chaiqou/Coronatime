<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

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
		$countries = Country::latest();

		if ($request->search)
		{
			$countries->where('name', 'like', '%' . $request->search . '%')
			->orWhere('name_geo', 'like', '%' . $request->search . '%');
		}

		$covidStatisticSum = [
			'confirmed' => Country::sum('confirmed'),
			'deaths'    => Country::sum('deaths'),
			'recovered' => Country::sum('recovered'),
		];

		$query = Country::query();
		if ($sort = $request->input('sort'))
		{
			$query->orderBy($request->input('name'), $sort);
		}

		return view('dashboard.by-country', ['covidStatisticSum' => $covidStatisticSum, 'countries'  => $query->get()]);
	}
}
