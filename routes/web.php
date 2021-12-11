<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('index');
});

Route::get('/signup', ['as' => 'signup', function () {
	return view('signup');
}]);

Route::get('/signin', ['as' => 'signin', function () {
	return view('signin');
}]);
