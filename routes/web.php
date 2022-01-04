<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'showIndex'])->name('index');
Route::post('/add-item', [IndexController::class, 'addItem'])->name('add-item');
Route::post('/remove-item', [IndexController::class, 'removeItem'])->name('remove-item');

Route::get('/signup', ['as' => 'signup.form', function () {
	return view('signup');
}]);

Route::get('/signin', ['as' => 'signin.form', function () {
	return view('signin');
}]);

Route::post('/signup', [RegisterController::class, 'save'])->name('signup');
Route::post('/signin', [LoginController::class, 'postLogin'])->name('signin');
Route::get('/logout', [LoginController::class, 'getLogout'])->name('logout');

Route::get('/admin-form', [UserController::class, 'showAdminForm'])->name('admin.form');
Route::post('/create-operator', [UserController::class, 'createOperator'])->name('create-operator');

Route::get('/chat', [ChatController::class, 'showChat'])->name('chat.form');
Route::get('/chat/{id}', [ChatController::class, 'showChatForAnswer'])->name('chat.answer.form');
Route::post('/send-message', [ChatController::class, 'sendMessage'])->name('send-message');
Route::post('/send-answer/{id}', [ChatController::class, 'sendAnswer'])->name('send-answer');
