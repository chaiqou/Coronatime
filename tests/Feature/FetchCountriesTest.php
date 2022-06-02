<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Country;
use Illuminate\Support\Facades\Http;

class FetchCountriesTest extends TestCase
{
	public function test_countries_are_fetched_from_api()
	{
		Http::fake();

		$country = Country::latest()->first();

		$this->assertDatabaseMissing('countries', [
			'code' => 'GE',
		]);
		$this->assertDatabaseCount('countries', 0);

		$this->artisan('synchronize:database')
			->assertSuccessful()
			->assertExitCode(0);
	}
}
