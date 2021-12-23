<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserRoles;
use App\Models\Role;
use App\Models\Helper;
use App\Constants\Roles;
use Illuminate\Http\JsonResponse;

class IndexController extends Controller
{
    public function showIndex(Request $request) {
        $helpers = Helper::all();
        if (Auth::check()) {
            $userId = Auth::id();
            $userRole = UserRoles::where('user_id', $userId)->first();
            $role = Role::where('id', $userRole->role_id)->first();
            return view('index', ['role' => $role->name, 'helpers' => $helpers]); 
        }
        return view('index', ['role' => Roles::$USER_ROLE, 'helpers' => $helpers]);
    }

    public function addItem(Request $request) {
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
