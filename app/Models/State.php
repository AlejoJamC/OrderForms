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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'status'
    ];

    protected $guarded = [];

    /**
     * Get the cities for state.
     */
    public function cities(){
        return $this->hasMany('App\Models\City', 'state_id', 'id');
    }

    /**
     * Get the users for state.
     */
    public function users(){
        return $this->hasMany('App\Models\User', 'state_id', 'id');
    }
        
}