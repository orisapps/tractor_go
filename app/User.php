<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','fullname',
        'firstname',
        'lastname','phone',
        'account_type','farmer_agent',
        'farm_name','farm_address',
        'description','tractor_type',
        'tractor_model','tractor_location','mileage',
        'user_type',
        'farm_type','attached_cluster',
        'photo','address',
        'location','agent_code',
        'role','status_id',
         'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
