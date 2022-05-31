<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
	use WithFaker, RefreshDatabase;

	public function test_a_user_have_access_to_registration_page()
	{
		$response = $this->get(route('user.registration.form'))->assertStatus(200);
	}

	public function test_a_user_requires_email()
	{
		$this->withoutExceptionHandling();
		$user = User::factory()->create(['email' => 'redberry@gmail.com', 'password' => 'password', 'username' => 'redberry']);

		$response = $this->post(route('user.registration.store'), [
			'username' => $this->faker->name,
			'password' => 'password',
		]);
	}

	// public function test_a_user_can_a_registration()
	// {
	// 	$this->withoutExceptionHandling();

	// 	$attributes = [
	// 		'email'                              => $this->faker->unique()->safeEmail(),
	// 		'username'                           => $this->faker->name(),
	// 		'password'                           => '12345678',
	// 		'password_confirmation'              => '12345678',
	// 	];

	// 	$this->post('/register', $attributes);

	// 	$this->assertDatabaseHas('users', [
	// 		'email'    => $attributes['email'],
	// 		'username' => $attributes['username'],
	// 	]);
	// }
}
