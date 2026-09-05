<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmablePassword extends Controller
{
     
    public function show(): View
    {
        return view('auth.confirm-password');
    }

  
    public function store(Request $request): RedirectResponse
    {
        if (! Auth::guard('web')->validate([
            'email' => $request->user()->email,
            'password' => $request->password,
        ])) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        $request->session()->put('auth.password_confirmed_at', time());

        return redirect()->intended(route('dashboard', absolute: false));
    }
}
