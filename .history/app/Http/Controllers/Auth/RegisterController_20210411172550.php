<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'min:6',
            'password_confirmation' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'terms' =>'accepted'
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        $user->assignRole('Customer');
    }
}
