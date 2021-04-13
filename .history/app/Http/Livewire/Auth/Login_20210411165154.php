<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $active;

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function authenticate()
    {
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {

            session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
