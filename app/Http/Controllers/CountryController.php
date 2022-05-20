<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;

class CountryController extends Controller
{
	public function worldwide(): View
	{
		$countries = Country::all();

		$covidStatisticSum = [
			'confirmed' => $countries->sum('confirmed'),
			'deaths'    => $countries->sum('deaths'),
			'recovered' => $countries->sum('recovered'),
		];

		return view('dashboard.main', ['covidStatisticSum' => $covidStatisticSum]);
	}

	public function byCountry(): View
	{
		$countries = Country::all();

		if (request('search'))
		{
			$countries->where('name', 'like', '%' . request('search') . '%');
		}

		$covidStatisticSum = [
			'confirmed' => $countries->sum('confirmed'),
			'deaths'    => $countries->sum('deaths'),
			'recovered' => $countries->sum('recovered'),
		];

		/* Sort logic **/

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

		return view('dashboard.by-country', ['covidStatisticSum' => $covidStatisticSum, 'countries'  => $countries->get()]);
	}
}
