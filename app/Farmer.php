<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    //
    protected $fillable = [
        'id','farm_name','farm_address','farm_type','attached_cluster','description','user_type',
    ];
}
