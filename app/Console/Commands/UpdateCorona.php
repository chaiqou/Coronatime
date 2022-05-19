<?php

namespace App\Console\Commands;

use App\Models\Country;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class UpdateCorona extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'synch:database';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Synchronize database from api';

	/**
	 * Execute the console command.
	 *
	 * @return int
	 */
	public function synchDatabase()
	{
		// fetch from api countries code

		$countries = Http::get('https://devtest.ge/countries')->collect();

		// get all country infirmation based countries code da put it in database for specific user

		foreach ($countries as $country)
		{
			do
			{
				$countryFullData = Http::post('https://devtest.ge/get-country-statistics', ['code' => $country['code']])->collect();
			}
			while (!$countryFullData->has('code'));

			$nameCountry = [
				'ka' => $country['name']['ka'],
				'en' => $country['name']['en'],
			];

			Country::create([
				'name'        => $nameCountry['en'],
				'code'        => $countryFullData['code'],
				'confirmed'   => $countryFullData['confirmed'],
				'recovered'   => $countryFullData['recovered'],
				'critical'    => $countryFullData['critical'],
				'deaths'      => $countryFullData['deaths'],
			]);
		}
	}

	public function handle()
	{
		$this->synchDatabase();
		return 'Statistic updated';
	}
}
