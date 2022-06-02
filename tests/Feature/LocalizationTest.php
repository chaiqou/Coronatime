<?php

namespace Tests\Feature;

use App\Http\Middleware\CheckLocale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Tests\TestCase;

class LocalizationTest extends TestCase
{
	public function test_user_can_change_locale_between_english_and_georgian()
	{
		$request = Request::create('set-locale/en', 'GET');
		$request->merge(['locale' => 'en']);
		$middleware = new CheckLocale();
		$middleware->handle($request, function ($req) {
			$this->assertEquals('en', App::getLocale());
		});
	}
}
