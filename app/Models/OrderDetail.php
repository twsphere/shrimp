<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_details';

    protected $fillable = [
        'id',
        'product_id',
        'quantity',
        'price',
        'total_price',
        'created_at',
        'updated_at'
    ];
}
