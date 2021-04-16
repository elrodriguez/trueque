<?php

namespace App\Http\Livewire\Product;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductFile;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

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

        $product = Product::create([
            'category_id' => $this->categoria,
            'internal_id' => $this->codigo,
            'description_small' => $this->descripcion_corta,
            'description_large' => $this->descripcion_larga,
            'state_product' => $this->estado,
            'state_trueque' => 'disponible',
            'preference' => $this->preferencias
        ]);

        $path = 'product'.DIRECTORY_SEPARATOR.Auth::user()->email.DIRECTORY_SEPARATOR.$product->id.DIRECTORY_SEPARATOR;
        $new_name1 = date('YmdHis').Str::random(4).'.jpg';

        $this->photo_1->storeAs($path, $new_name1,'public');

        ProductFile::create([
            'product_id' => $product->id,
            'original_name' => $this->photo_1->getClientOriginalName(),
            'new_name' => $new_name1,
            'extension' => '.jpg',
            'url' => $path.$new_name1,
            'principal' => true
        ]);

        if($this->photo_2){
            $new_name2 = date('YmdHis').Str::random(4).'.jpg';
            $this->photo_2->storeAs($path, $new_name2,'public');
            ProductFile::create([
                'product_id' => $product->id,
                'original_name' => $this->photo_2->getClientOriginalName(),
                'new_name' => $new_name2,
                'extension' => '.jpg',
                'url' => $path.$new_name2,
                'principal' => true
            ]);
        }
        if($this->photo_3){
            $new_name3 = date('YmdHis').Str::random(4).'.jpg';
            $this->photo_3->storeAs($path, $new_name3,'public');
            ProductFile::create([
                'product_id' => $product->id,
                'original_name' => $this->photo_3->getClientOriginalName(),
                'new_name' => $new_name3,
                'extension' => '.jpg',
                'url' => $path.$new_name3,
                'principal' => true
            ]);
        }

        $this->dispatchBrowserEvent('response_products_store', ['message' => 'Se registro correctamente']);
    }
}
