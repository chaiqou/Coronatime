<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Http;

class FetchCountriesFromApiCommandTest extends TestCase
{
	public function test_sdsds()
	{
		Http::fake(['https://devtest.ge/countries' => json_decode(file_get_contents('tests/country.json'), true)]);
		Http::fake(['https://devtest.ge/get-country-statistics' => json_decode(file_get_contents('tests/country-statistics.json'), true)]);
		$this->artisan('synchronize:database')
			->assertSuccessful();
	}
}
