<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserRoles;
use App\Models\Role;
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
}
