<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request as SortRequest;
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

		if ($request->input('search'))
		{
			$countries->where('name', 'like', '%' . $request->input('search') . '%')
			->orWhere('name_geo', 'like', '%' . $request->input('search') . '%');
		}

		$covidStatisticSum = [
			'confirmed' => Country::sum('confirmed'),
			'deaths'    => Country::sum('deaths'),
			'recovered' => Country::sum('recovered'),
		];

		switch (SortRequest::get('sort')) {
			case 'name_asc':
				$countries = Country::orderBy('name', 'asc');
				break;
			case 'name_desc':
				$countries = Country::orderBy('name', 'desc');
				break;
			case 'confirmed_asc':
				$countries = Country::orderBy('confirmed', 'asc');
				break;
			case 'confirmed_desc':
				$countries = Country::orderBy('confirmed', 'desc');
				break;
			case 'deaths_asc':
				$countries = Country::orderBy('deaths', 'asc');
				break;
			case 'deaths_desc':
				$countries = Country::orderBy('deaths', 'desc');
				break;
			case 'recovered_asc':
				$countries = Country::orderBy('recovered', 'asc');
				break;
			case 'recovered_desc':
				$countries = Country::orderBy('recovered', 'desc');
				break;
		}

		return view('dashboard.by-country', ['covidStatisticSum' => $covidStatisticSum, 'countries'  => $countries->get()]);
	}
}
