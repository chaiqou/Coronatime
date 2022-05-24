<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Country;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Mail\MailController;
use App\Http\Requests\RegistrationRequest;

class UserController extends Controller
{
	public function registration(RegistrationRequest $request): RedirectResponse
	{
		$validated = $request->validated();

		$user = User::create([
			'email'             => $request->email,
			'username'          => $request->username,
			'password'          => bcrypt($request->password),
			'verification_code' => sha1(time()),
		]);

		/* after first registration (only for one time)
		 * this logic fetch data for countries database
		 */

		if (!Country::exists())
		{
			$countries = Http::get('https://devtest.ge/countries')->collect();

			foreach ($countries as $country)
			{
				do
				{
					$countryFullData = Http::post('https://devtest.ge/get-country-statistics', ['code' => $country['code']])->collect();
				}
				while (!$countryFullData->has('code'));

				$nameCountry = [
					'ka' => $country['name']['ka'],
					'en' => $country['name']['en'],
				];

				Country::create([
					'name'             => $nameCountry['en'],
					'name_geo'         => $nameCountry['ka'],
					'code'             => $countryFullData['code'],
					'confirmed'        => $countryFullData['confirmed'],
					'recovered'        => $countryFullData['recovered'],
					'critical'         => $countryFullData['critical'],
					'deaths'           => $countryFullData['deaths'],
				]);
			}
		}

		if ($user != null)
		{
			MailController::sendSignupEmail($user->username, $user->email, $user->verification_code);

			return redirect('/mail-confirmation');
		}

		return redirect()->back();
	}
}
