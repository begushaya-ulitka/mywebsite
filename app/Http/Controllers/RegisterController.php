<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController
{
    public function save(Request $request) {
        if (!$request->email || !$request->password) {
            return redirect(route('signup.form'))->withErrors([
                'errors' => 'Ошибка при регистрации пользователя' 
            ]);
        }
        $user = new User([
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "name" => $request->name,
        ]);
        $user->save();
        Auth::login($user);
        return redirect(route('index'));
    }
}