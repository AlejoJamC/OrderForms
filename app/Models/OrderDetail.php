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
    public $timestamps = true;

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'observation',
        'verified',
        'canceled'
    ];

    protected $guarded = [];

        
}