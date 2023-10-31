<?php

namespace App\Http\Controllers\Admin;

use App\Library\RoleTag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    //
    use AuthenticatesUsers;

    public function login(AdminLoginRequest $request)
    {
        $payload = $request->validated();
        $adminGuard = auth()->guard(RoleTag::ADMIN);

        if ($adminGuard->attempt($payload)) {
            if ($adminGuard->user()->hasAnyRole(RoleTag::ADMIN, RoleTag::SUPER_ADMIN)) {
                return redirect()->route('event.index');
            }
        }

        // Authentication failed, redirect back with errors
        return redirect()->route('admin.login')->withErrors(['login' => 'These credentials do not match our records.']);
    }

    public function logout()
    {
        $adminGuard = auth()->guard(RoleTag::ADMIN);
        $adminGuard->logout();

        return redirect()->route('admin.login')->with('success', 'Logout successfully');;
    }
}
