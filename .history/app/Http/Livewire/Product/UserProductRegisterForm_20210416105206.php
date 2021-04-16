<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;

class UserProductRegisterForm extends Component
{
    public $categories;

    public function render()
    {
        return view('livewire.product.user-product-register-form');
    }
}
