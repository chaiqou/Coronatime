<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\ForgotController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\CountryController;

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
	// Show register form/create Form
	Route::get('/register', [UserController::class, 'create'])->name('user.register');

	// Create New User
	Route::post('/register', [UserController::class, 'register'])->name('user.create');

	// Submit Logged user form
	Route::post('/login', [AuthController::class, 'store'])->name('user.store');

	// Log In user
	Route::get('/', [AuthController::class, 'create'])->name('user.login');

	// Log Out user
	Route::post('/logout', [AuthController::class, 'destroy'])->name('user.logout');

	// Email confirmation page after submit new user
	Route::get('/mail-confirmation', [MailController::class, 'create'])->name('email.confirm');

	// Email verify page after click on email button
	Route::get('/mail-verify', [MailController::class, 'verify'])->name('email.verify');

	// show dashboard
	Route::get('/dashboard', [CountryController::class, 'create'])->name('dashboard')->middleware('auth');
	Route::get('/by-country', [CountryController::class, 'country'])->name('dashboard.country');

	// Forgot Password
	Route::get('/forgot-password', [ForgotController::class, 'create'])->name('password.request');
	Route::post('/forgot-password', [ForgotController::class, 'store'])->name('forgot.password.link');

	// reset password

	Route::get('/reset-password/{token}', [ResetController::class, 'create'])->name('password.reset.form');
	Route::post('/reset-password', [ResetController::class, 'store'])->name('password.reset');
	Route::get('/updated-password', [ResetController::class, 'updatedPassword'])->name('password.updated');
});

	// // language switcher

	Route::get('set-locale/{locale}', [LanguageController::class, 'index'])->middleware('check.locale')->name('locale.setting');
