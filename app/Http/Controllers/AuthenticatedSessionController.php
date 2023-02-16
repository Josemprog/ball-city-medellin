<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        // return $credentials;

        if(!Auth::attempt($credentials, $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email'    => __('auth.failed'),
                'password' => __('auth.failed')
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended()->with('status', 'LLEVE LO YO SU, WUAAU');


    }

    public function destroy(Request $request) {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('login')->with('status', 'Cerraste sesión bobo, WUAAU');

    }
}
