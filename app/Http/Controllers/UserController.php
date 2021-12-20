<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController
{
    public function showAdminForm(Request $request) {
        $user = Auth::user();
        return view('admin-form');
    }
}
