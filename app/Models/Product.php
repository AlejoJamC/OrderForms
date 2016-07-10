<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 */
class Product extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    protected $fillable = [
        'title',
        'description',
        'presentation',
        'brand',
        'reference',
        'price',
        'price_with_tax',
        'quantity',
        'status'
    ];

    protected $guarded = [];

        
}