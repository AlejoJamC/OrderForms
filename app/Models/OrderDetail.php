<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderDetail
 */
class OrderDetail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_details';

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
        'order_id',
        'product_id',
        'quantity',
        'observation',
        'verified',
        'canceled'
    ];

    protected $guarded = [];

    /**
     * Get the product listed on this order detail.
     */
    public function products(){
        return $this->belongsToMany('App\Models\Product');
    }

    /**
     * Get the order that own this order detail.
     */
    public function order(){
        return $this->belongsToMany('App\Models\Order');
    }
        
}