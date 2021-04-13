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
        $credentials = array(
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'remember_token' => $request->input('remember')
        );

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            dd('deeed');
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
