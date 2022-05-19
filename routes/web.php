<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\ForgotController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\LanguageController;

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
	Route::get('/register', [UserController::class, 'index'])->name('user.registration.form');
	Route::post('/register', [UserController::class, 'registration'])->name('user.registration');

	// Log In
	Route::get('/', [AuthController::class, 'index'])->name('user.login.form');
	Route::post('/login', [AuthController::class, 'login'])->name('user.login');

	// Log Out
	Route::post('/logout', [AuthController::class, 'logout'])->name('user.logout');

	// Mail confirmation and verify pages
	Route::get('/mail-confirmation', [MailController::class, 'index'])->name('mail.confirmation');
	Route::get('/mail-verify', [MailController::class, 'verification'])->name('mail.verification');

	// Dashboard
	Route::get('/dashboard', [CountryController::class, 'worldwide'])->name('dashboard.worldwide')->middleware('auth');
	Route::get('/by-country', [CountryController::class, 'byCountry'])->name('dashboard.country')->middleware('auth');

	// Forgot Password
	Route::get('/forgot-password', [ForgotController::class, 'index'])->name('forgot.password.form');
	Route::post('/forgot-password', [ForgotController::class, 'sendResetLink'])->name('forgot.password.link');

	// reset password
	Route::get('/reset-password/{token}', [ResetController::class, 'index'])->name('reset.password.form');
	Route::post('/reset-password', [ResetController::class, 'resetPassword'])->name('reset.password');

	// Updated password
	Route::get('/updated-password', [ResetController::class, 'updatedPassword'])->name('updated.password');
});

	// language switcher
	Route::get('set-locale/{locale}', [LanguageController::class, 'index'])->name('locale.setting')->middleware('check.locale');
