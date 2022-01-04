<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Chat;
use App\Models\UserRoles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showSignup(Request $request) {
        return view('signup');
    }

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
        $role = new UserRoles([
            "user_id" => $user->id,
            "role_id" => 1,
        ]);
        $chat = new Chat([
            "user_id" => $user->id,
        ]);
        $role->save();
        $chat->save();
        Auth::login($user);
        return redirect(route('index'));
    }
}
