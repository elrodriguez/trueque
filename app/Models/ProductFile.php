<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'original_name',
        'new_name',
        'extension',
        'url',
        'principal',
        'state'
    ];
}
