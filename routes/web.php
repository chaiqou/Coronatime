<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DashboardController;

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

	// Show register form/create Form
	Route::get('/register', [UserController::class, 'create'])->name('user.register');

	// Create New User
	Route::post('/register', [UserController::class, 'register'])->name('user.create');

	// Submit Logged user form
	Route::post('/login', [SessionController::class, 'store'])->name('user.store');

	// Log In user
	Route::get('/', [SessionController::class, 'create'])->name('user.login');

	// Log Out user
	Route::post('/logout', [SessionController::class, 'destroy'])->name('user.logout');

	// Email confirmation page after submit new user
	Route::get('/mail-confirmation', [MailController::class, 'create'])->name('email.confirm');

	// Email verify page after click on email button
	Route::get('/mail-verify', [MailController::class, 'verify'])->name('email.verify');

	// show dashboard
	Route::get('/dashboard', [DashboardController::class, 'create'])->name('dashboard')->middleware('auth');
