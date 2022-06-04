<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class CountryFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition()
	{
		return [
			'name'      => $this->faker->country,
			'name_geo'  => $this->faker->country(),
			'code'      => $this->faker->countryCode(),
			'recovered' => $this->faker->numberBetween(0, 1000000),
			'deaths'    => $this->faker->numberBetween(0, 1000000),
			'confirmed' => $this->faker->numberBetween(0, 1000000),
			'critical'  => $this->faker->numberBetween(0, 1000000),
		];
	}
}
