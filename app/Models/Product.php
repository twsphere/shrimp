<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use James\Sortable\SortableTrait;
use James\Sortable\Sortable;

class Product extends Model
{
    use SortableTrait;

    public $sortable = [
        'sort_field' => 'sort',
        'sort_when_creating' => true,
    ];

    protected $table = 'products';

    const OPEN = 1;
    const CLOSE = 0;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'category_id',
        'name',
        'size',
        'price',
        'description',
        'image',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
