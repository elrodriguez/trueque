<?php

namespace App\Http\Livewire\Product;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserProductRegisterForm extends Component
{
    use WithFileUploads;

    public $photo_1;
    public $photo_2;
    public $photo_3;

    public $categories;

    public $categoria;
    public $codigo;
    public $descripcion_corta;
    public $descripcion_larga;
    public $estado;
    public $preferencias;


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
        $this->validate([
            'categoria' => 'required',
            'codigo' => 'required',
            'descripcion_corta' => 'required',
            'descripcion_larga' => 'required',
            'estado' => 'required',
            'preferencias' => 'required',
            'photo_1' => 'required'
        ]);

        Product::create([
            'category_id' => $this->categoria,
            'internal_id' => $this->codigo,
            'description_small' => $this->descripcion_corta,
            'description_large' => $this->descripcion_larga,
            'state_product' => $this->estado,
            'state_trueque' => 'disponible',
            'preference' => $this->preferencias
        ]);
    }
}
