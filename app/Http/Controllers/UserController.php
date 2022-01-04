<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\UserRoles;
use App\Models\Role;
use App\Models\User;
use App\Constants\Roles;

class UserController
{
    public function showAdminForm(Request $request) {
        if (Auth::check()) {
            $userRole = UserRoles::where('user_id', Auth::id())->first();
            $role = Role::where('id', $userRole->role_id)->first();
            if ($role->name === Roles::$ADMIN_ROLE) {
                return view('admin-form');
            }
        }
        return view('errors.404');
    }

    public function createOperator(Request $request) {
        if (!$request->email || !$request->password) {
            return redirect(route('admin.form'))->withErrors([
                'errors' => 'Ошибка при регистрации оператора' 
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
            "role_id" => 2,
        ]);
        $role->save();
        return redirect()->back()->with('success', 'Оператор добавлен');
    }
}
