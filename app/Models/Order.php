<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use James\Sortable\SortableTrait;
use James\Sortable\Sortable;

class Order extends Model
{
    use SortableTrait;

    public $sortable = [
        'sort_field' => 'sort',
        'sort_when_creating' => true,
    ];

    protected $table = 'orders';

    const OPEN = 1;
    const CLOSE = 0;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'date',
        'serial',
        'total_price',
        'remark',
        'status',
        'name',
        'mobile',
        'line',
        'zip_code',
        'county',
        'district',
        'address',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

}
