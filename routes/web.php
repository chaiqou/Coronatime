<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Mail\MailController;
use App\Http\Controllers\Mail\ResetController;
use App\Http\Controllers\Mail\ForgetPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'check.locale'], function () {
	// Registration
	Route::view('/register', 'register.main')->name('user.registration.form');
	Route::post('/register', [UserController::class, 'registration'])->name('user.registration');

	// Log In
	Route::get('/', [AuthController::class, 'index'])->name('user.login.form');
	Route::post('/login', [AuthController::class, 'login'])->name('user.login');

	// Log Out
	Route::post('/logout', [AuthController::class, 'logout'])->name('user.logout');

	// Mail confirmation and verify pages
	Route::view('/mail-confirmation', 'mail.confirmation')->name('mail.confirmation');
	Route::view('/mail-confirmed', 'mail.confirmed')->name('mail.confirmed');
	Route::get('/mail-verify', [MailController::class, 'verification'])->name('mail.verification');

	// Dashboard
	Route::get('/dashboard', [CountryController::class, 'worldwide'])->name('dashboard.worldwide')->middleware('auth');
	Route::get('/by-country', [CountryController::class, 'byCountry'])->name('dashboard.country')->middleware('auth');

	// Forgot Password
	Route::view('/forgot-password', 'password.forgot-password')->name('forgot.password.form');
	Route::post('/forgot-password', [ForgetPasswordController::class, 'forgotPasswordEmail'])->name('forgot.password.link');

	// reset password
	Route::get('/reset-password/{token}', [ResetController::class, 'index'])->name('reset.password.form');
	Route::post('/reset-password', [ResetController::class, 'resetPassword'])->name('reset.password');

	// Updated password
	Route::view('/updated-password', 'password.updated-password')->name('updated.password');
});

	// language switcher
	Route::get('set-locale/{locale}', [LanguageController::class, 'switctchLanguageLocale'])->name('locale.setting');
