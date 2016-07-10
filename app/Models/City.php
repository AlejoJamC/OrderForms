<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 */
class City extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cities';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    protected $fillable = [
        'name',
        'state_id',
        'status'
    ];

    protected $guarded = [];

        
}