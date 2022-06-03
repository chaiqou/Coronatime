<?php

namespace Tests\Feature;

use Tests\TestCase;

class LocalizationTest extends TestCase
{
	public function provideLocales()
	{
		return [
			'english'  => ['en', 'Remember'],
			'georgian' => ['ka', 'დამიმახსოვრე'],
		];
	}

	/**
	 * @dataProvider provideLocales
	 */
	public function testWelcomePageContents($locale)
	{
		$this->app->setLocale($locale);
		$this->get(route('locale.setting', ['locale' => $locale]))
		->assertStatus(302);
	}
}
