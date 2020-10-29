<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'cost_price',
        'selling_price',
        'attributes'
    ];

    protected $hidden = [
        'cost_price'
    ];
}
