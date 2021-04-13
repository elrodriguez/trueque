<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        //dd($request->input('password'));
        $credentials = [
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'remember_token' => $request->input('remember')
        ];
        dd($credentials);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
