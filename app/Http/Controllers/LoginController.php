<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showSignin(Request $request) {
        return view('signin');
    }

    public function postLogin(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect(route('index'));
        }

        return back()->withErrors([
            'errors' => 'Ошибка при входе',
        ]);
    }

    public function getLogout(Request $request) {
        Auth::logout();
        return redirect(route('index'));
    }
}
