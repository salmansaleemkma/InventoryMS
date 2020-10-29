<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity'
    ];

    public function order()
    {
        return $this->belongsTo('App\Models\Order','order_id','id');
    }

    public function product()
    {
        return $this->belongTo('App\Models\Product','product_id','id');
    }

    public function details()
    {
        return $this->belongTo('App\Models\ProductDetail','details_id','id');
    }
}
