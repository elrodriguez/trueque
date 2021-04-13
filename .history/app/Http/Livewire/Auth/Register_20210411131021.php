<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $terms;
    public $password_confirmation;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users,email|max:255',
        'password' => 'required|min:6',
        'password_confirmation' => 'required|min:6'
    ];

    protected $messages = [
        'email.required' => 'La dirección de correo electrónico no puede estar vacía.',
        'email.email' => 'El formato de la dirección de correo electrónico no es válido.',
        'email.unique' => 'La dirección de correo electrónico ya existe.',
        'email.max' => 'La dirección de correo electrónico solo debe tener máximo 255.',
        'password.required' => 'La clave no puede estar vacía.',
        'password_confirmation.required' => 'La clave de confirmación no puede estar vacía.',
        'name.required' => 'El nombre no puede estar vacío.',
    ];

    public function render()
    {
        return view('livewire.auth.register');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store(){
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);
    }
}
