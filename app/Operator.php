<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    //
    protected $fillable = [
        'id','tractor_type','tractor_model','tractor_location','attached_cluster','mileage','user_type',
    ];
}
