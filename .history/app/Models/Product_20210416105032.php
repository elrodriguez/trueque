<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'internal_id',
        'description_small',
        'description_large',
        'state_product',
        'state_trueque',
        'preference'
    ];
}
