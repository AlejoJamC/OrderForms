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
        'remember_token',
        'role_id',
        'status'
    ];

    protected $guarded = [];

    /**
     * Get the role that use this user.
     */
    public function role(){
        return $this->belongsTo('App\Models\Role', 'id', 'role_id');
    }

    /**
     * Get the state of this user.
     */
    public function State(){
        return $this->belongsTo('App\Models\State', 'id', 'state_id');
    }

    /**
     * Get the city of this user.
     */
    public function City(){
        return $this->belongsTo('App\Models\City', 'id', 'city_id');
    }

    /**
     * Get the users for state.
     */
    public function orders(){
        return $this->hasMany('App\Models\Order', 'user_id', 'id');
    }
        
}