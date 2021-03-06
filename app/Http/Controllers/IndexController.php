<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserRoles;
use App\Models\Role;
use App\Models\Helper;
use App\Constants\Roles;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function showIndex(Request $request) {
        $helpers = Helper::all();
        if (Auth::check()) {
            $userId = Auth::id();
            $userRole = UserRoles::where('user_id', $userId)->first();
            $role = Role::where('id', $userRole->role_id)->first();
            if ($role->name === Roles::$OPERATOR_ROLE) {
                $users = DB::table('users')
                    ->join('user_roles', 'users.id', '=', 'user_roles.user_id')
                    ->where('role_id', Roles::$USER_ROLE_ID)
                    ->get();
                return view('users-chat-links', ['users' => $users]);
            }
            return view('index', ['role' => $role->name, 'helpers' => $helpers]); 
        }
        return view('index', ['role' => Roles::$USER_ROLE, 'helpers' => $helpers]);
    }

    public function addItem(Request $request) {
        if (!$request->title || !$request->text) {
            return redirect()->back();
        }
        $helper = new Helper([
            'title' => $request->title,
            'text' => $request->text
        ]);
        $helper->save();
        return redirect()->back();
    }

    public function removeItem(Request $request) {
        $result = Helper::where('id', $request->get('id'))->delete();
        return new JsonResponse([
            'success' => $result
        ]);
    }
}
