<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TempOrder extends Model
{
    protected $table = 'temp_orders';

    protected $fillable = [
        'id',
        'session_id',
        'product_id',
        'quantity',
        'created_at',
        'updated_at',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
