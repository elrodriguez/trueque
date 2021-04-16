<?php

namespace App\Http\Livewire\Product;

use App\Models\Category;
use Livewire\Component;

class UserProductRegisterForm extends Component
{
    public $categories;

    public function render()
    {
        $this->categories = Category::where('state',true)->get();
        return view('livewire.product.user-product-register-form');
    }
}
