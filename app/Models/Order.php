<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 */
class Order extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'orders';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ship_date',
        'user_id',
        'consecutive',
        'order_state_id',
        'way_to_pay',
        'verified',
        'canceled',
        'seller',
        'status'
    ];

    protected $guarded = [];

        
}