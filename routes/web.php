<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', ['as' => 'index', function () {
	return view('index');
}]);

Route::get('/signup', ['as' => 'signup.form', function () {
	return view('signup');
}]);

Route::get('/signin', ['as' => 'signin.form', function () {
	return view('signin');
}]);

Route::post('/signup', [RegisterController::class, 'save'])->name('signup');
Route::post('/signin', [LoginController::class, 'postLogin'])->name('signin');
Route::get('/logout', [LoginController::class, 'getLogout'])->name('logout');
