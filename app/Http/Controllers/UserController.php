<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Country;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
	public function index(): View
	{
		return view('register.main');
	}

	public function registration(Request $request): RedirectResponse
	{
		$validated = $request->validate([
			'username'           => ['required', 'min:3', Rule::unique('users', 'username')],
			'email'              => ['required', 'email', Rule::unique('users', 'email')],
			'password'           => 'required|confirmed|min:3',
		]);

		// create new user

		$user = new User();
		$user->username = $request->username;
		$user->email = $request->email;
		$user->password = Hash::make($request->password);
		$user->verification_code = sha1(time());
		$user->save();

		// get all country infirmation based countries code da put it in database for specific user

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
					'name'        => $nameCountry['en'],
					'code'        => $countryFullData['code'],
					'confirmed'   => $countryFullData['confirmed'],
					'recovered'   => $countryFullData['recovered'],
					'critical'    => $countryFullData['critical'],
					'deaths'      => $countryFullData['deaths'],
				]);
			}
		}

		if ($user != null)
		{
			// if user created and !== null , then send email

			MailController::sendSignupEmail($user->username, $user->email, $user->verification_code);

			return redirect('/mail-confirmation');
		}

		return redirect()->back();
	}
}
