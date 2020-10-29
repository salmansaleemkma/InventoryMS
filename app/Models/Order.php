<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'order_id',
        'status',
        'transaction_ref',
        'tax',
        'tax_percentage',
        'total'
    ];

    public function orderItems()
    {
        return $this->hasMany('App\Models\OrderItem');
    }
}
