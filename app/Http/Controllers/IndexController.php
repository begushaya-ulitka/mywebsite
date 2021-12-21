<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserRoles;
use App\Models\Role;
use App\Constants\Roles;

class IndexController extends Controller
{
    public function showIndex(Request $request) {
        if (Auth::check()) {
            $userId = Auth::id();
            $userRole = UserRoles::where('user_id', $userId)->first();
            $role = Role::where('id', $userRole->role_id)->first();
            return view('index', ['role' => $role->name]); 
        }
        return view('index', ['role' => Roles::$USER_ROLE]);
    }
}
