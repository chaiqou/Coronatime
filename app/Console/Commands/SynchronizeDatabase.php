<?php

namespace App\Console\Commands;

use App\Models\Country;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class SynchronizeDatabase extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'synchronize:database';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Synchronize database from api';

	public function handle()
	{
		$countries = Http::get('https://devtest.ge/countries')->json();

		foreach ($countries as $country)
		{
			$countryFullData = Http::post('https://devtest.ge/get-country-statistics', ['code' => $country['code']])->json();

			Country::create([
				'name'             => $country['name']['en'],
				'name_geo'         => $country['name']['ka'],
				'code'             => $countryFullData['code'],
				'confirmed'        => $countryFullData['confirmed'],
				'recovered'        => $countryFullData['recovered'],
				'critical'         => $countryFullData['critical'],
				'deaths'           => $countryFullData['deaths'],
			]);
		}

		return 'Statistic updated';
	}
}
