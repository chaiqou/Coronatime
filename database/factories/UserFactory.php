<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Project>
 */
class UserFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition()
	{
		return [
			'username'              => $this->faker->name(),
			'email'                 => $this->faker->unique()->safeEmail(),
			'email_verified_at'     => now(),
			'password'              => 'password',
			'remember_token'        => Str::random(10),
		];
	}
}
