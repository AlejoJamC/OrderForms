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
     * Get the users for this role.
     */
    public function users(){
        return $this->hasMany('App\Models\User', 'role_id', 'id');
    }
        
}