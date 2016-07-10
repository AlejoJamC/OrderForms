<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 */
class Role extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'roles';

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