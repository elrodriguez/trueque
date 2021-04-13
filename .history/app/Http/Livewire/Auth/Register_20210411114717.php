<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $terms;
    public $password_confirmation;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:email|max:255',
        'password' => 'required',
        'password_confirmation' => 'required'
    ];

    protected $messages = [
        'email.required' => 'The Email Address cannot be empty.',
        'email.email' => 'The Email Address format is not valid.',
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
    }
}
