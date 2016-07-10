<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderState
 */
class OrderState extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_states';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'status'
    ];

    protected $guarded = [];

        
}