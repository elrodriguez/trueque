<?php

namespace App\Http\Livewire\Product;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserProductRegisterForm extends Component
{
    use WithFileUploads;

    public $photo_1;
    public $photo_2;
    public $photo_3;

    public $categories;

    public function render()
    {
        $this->categories = Category::where('state',true)->get();
        return view('livewire.product.user-product-register-form');
    }

    public function updatedPhoto()
    {
        $this->validate([
            'photo_1' => 'image|max:1024',
            'photo_2' => 'image|max:1024',
            'photo_3' => 'image|max:1024',
        ]);
    }

    public function save()
    {
        // ...
    }
}
