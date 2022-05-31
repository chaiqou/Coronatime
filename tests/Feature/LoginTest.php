<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
	// use WithFaker, RefreshDatabase;

	// public function test_user_have_access_to_login_page()
	// {
	// 	$response = $this->get(route('user.login.form'));
	// 	$response->assertStatus(200);
	// }

	// public function test_user_can_login_with_username_and_password()
	// {
	// 	$this->withoutMiddleware();
	// 	$user = User::factory()->create([
	// 		'username'    => 'chaiqou',
	// 		'password'    => 'password',
	// 	]);

	// 	$response = $this->post('/login', [
	// 		'username'    => 'chaiqou',
	// 		'password'    => 'password',
	// 	]);

	// 	$response->assertRedirect(route('dashboard.worldwide'));
	// }
}
