<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Country;
use App\Models\User;

class DashboardTest extends TestCase
{
	public function test_country_can_be_searched_by_given_keyword()
	{
		$this->withoutExceptionHandling();
		$username = 'chaiqou';
		$password = '123';
		$is_verified = 1;

		$user = User::factory()->create([
			'username'    => $username,
			'password'    => bcrypt(123),
			'is_verified' => $is_verified,
		]);

		$response = $this->actingAs($user)->post(route('user.login'), [
			'username'    => $username,
			'password'    => 123,
			'is_verified' => $is_verified,
		]);

		$this->assertAuthenticated();
		$response->assertRedirect(route('dashboard.worldwide'));

		$country1 = Country::factory()->create([
			'name' => 'Georgia',
			'code' => 'GE',
		]);

		$country2 = Country::factory()->create([
			'name_geo' => 'საქართველო',
		]);

		Country::factory()->create([
			'name' => 'terjola',
		]);

		$response = $this->get('/by-country?search=GE');

		$response->assertStatus(200);
		$response->assertSee('Statistics by country');
		$response->assertDontSee('Terjola');
	}
}
