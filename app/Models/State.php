<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class State
 */
class State extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'states';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    protected $fillable = [
        'name',
        'status'
    ];

    protected $guarded = [];

        
}