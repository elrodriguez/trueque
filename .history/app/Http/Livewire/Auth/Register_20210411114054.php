<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Register extends Component
{
    public $name;
    public $password;
    public $terms;
    public $password_confirmation;

    public function render()
    {
        return view('livewire.auth.register');
    }

    public function store(){
        $this->validate([
            ''
        ]);
    }
}
