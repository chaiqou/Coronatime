<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;

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
	Route::post('/register', [UserController::class, 'store'])->name('user.create');

	// Submit Logged user form
	Route::post('/login', [SessionController::class, 'store'])->name('user.store');

	// Log In user
	Route::get('/', [SessionController::class, 'create'])->name('user.login');

	// Email confirmation page after submit new user
	Route::get('/email-confirmation', [MailController::class, 'create'])->name('email.confirm');
