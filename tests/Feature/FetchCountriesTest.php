<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Country;

class FetchCountriesTest extends TestCase
{
	public function test_artisan_command_can_synchronize_database()
	{
		$country = Country::where('code', '=', 'AF')->first();

		$this->assertDatabaseMissing('countries', ['code' => 'AF']);

		$this->artisan('synchronize:database')
			->assertSuccessful()
			->assertExitCode(0);

		$this->assertDatabaseCount('countries', 105);
	}
}
