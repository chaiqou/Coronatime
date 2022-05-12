<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
	return view('login.main');
});
