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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'state_id',
        'status'
    ];

    protected $guarded = [];

    /**
     * Get the State that owns this city.
     */
    public function state(){
        return $this->belongsTo('App\Models\State', 'id', 'state_id');
    }

    /**
     * Get the users for City.
     */
    public function users(){
        return $this->hasMany('App\Models\User', 'city_', 'id');
    }
        
}