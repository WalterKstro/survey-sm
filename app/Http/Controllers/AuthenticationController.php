<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Validation\ValidationException;

class AuthenticationController extends Controller
{
    //
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
           'email' => ['required','email','string'],
            'password' => ['required','string']
        ]);

        $isRememberSession = $request->boolean('remember');
        $isAuthenticated = Auth::attempt($validated,$isRememberSession);

        if ( !$isAuthenticated) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
                'password' => __('auth.failed'),
            ]);
        }

        $request->session()->regenerate();

        // redirect to original route
        return redirect()
            ->intended('/admin')
            ->with('status','Bienvenido a San Martin');
    }

    public function destroy(Request $request) {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return to_route('login')
            ->with('status','Has salido del sistema');
    }
}
