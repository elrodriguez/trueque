<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(Request $request){

        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'min:6',
            'password_confirmation' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'terms' =>'accepted'
        ]);

        if ($validator->fails()) {
            return redirect('post/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        $user->assignRole('Customer');
    }
}
