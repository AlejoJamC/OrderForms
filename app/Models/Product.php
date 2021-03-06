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
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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

    /**
     * Get the order details for this product.
     */
    public function orderDetails(){
        return $this->belongsToMany('App\Models\OrderDetail');
    }
        
}