<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 */
class User extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

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
        'fist_name',
        'last_name',
        'business_name',
        'identification',
        'contact',
        'email',
        'address',
        'city_id',
        'state_id',
        'picture',
        'username',
        'password',
        'role_id',
        'status'
    ];

    protected $guarded = [];

        
}