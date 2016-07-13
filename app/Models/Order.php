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
        'order_state_id',
        'way_to_pay',
        'verified',
        'canceled',
        'seller',
        'status'
    ];

    protected $guarded = [];

    /**
     * Get the state of this order
     */
    public function orderStates(){
        return $this->belongsTo('App\Models\OrderState', 'id', 'order_state_id');
    }

    /**
     * Get the user that own this order.
     */
    public function users(){
        return $this->belongsTo('App\Models\User', 'id', 'user_id');
    }

    /**
     * Get the order details for this order.
     */
    public function orderDetails(){
        return $this->belongsToMany('App\Models\OrderDetail');
    }
        
}