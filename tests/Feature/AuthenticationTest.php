<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;

class AuthenticationTest extends TestCase
{
	public function test_login_page_can_be_rendered()
	{
		$response = $this->get(route('user.login.form'))
			->assertSee('Welcome back')
			->assertSuccessful();
	}

	public function test_user_has_username_attribute()
	{
		$user = User::factory()->create([
			'username' => 'chaiqou',
			'password' => bcrypt(123),
		]);

		$this->assertEquals('chaiqou', $user->username);
	}

	public function test_user_has_password_attribute()
	{
		$user = User::factory()->create([
			'username' => 'chaiqou',
			'password' => 123,
		]);

		$this->assertEquals(123, $user->password);
	}

	public function test_users_can_authenticate()
	{
		$user = User::factory()->create([
			'username' => 'chaiqou',
			'password' => bcrypt(123),
		]);

		$response = $this->post(route('user.login'), [
			'username' => 'chaiqou',
			'password' => 123,
		]);

		$this->assertAuthenticated();
		$response->assertRedirect(route('user.login.form'));
	}

	public function test_authenticated_users_can_access_dashboard()
	{
		$user = User::factory()->create();

		$response = $this->actingAs($user)
		->get(route('dashboard.worldwide'))
		->assertSee('Worldwide Statistics')
		->assertSuccessful();
	}

	public function test_unauthenticated_users_can_not_access_dashboard()
	{
		$response = $this->get(route('dashboard.worldwide'))
		->assertStatus(500);
	}

	public function test_users_can_not_authenticate_with_invalid_password()
	{
		$user = User::factory()->create();

		$this->post(route('user.login'), [
			'username'    => $user->username,
			'password'    => 'wrong-password',
		]);

		$this->assertGuest();
	}

	public function test_users_duplication()
	{
		$user = User::factory()->make(['username' => 'nikoloz', 'password' => '123456']);
		$user2 = User::factory()->make(['username' => 'mariam', 'password' => '123456']);

		$this->assertTrue($user != $user2);
	}

	public function test_can_a_user_logout()
	{
		$user = User::factory()->create();
		$this->be($user);

		$this->post(route('user.logout'))
		->assertRedirect(route('user.login.form'));

		$this->assertGuest();
	}
}
