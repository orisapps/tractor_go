<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComplainRequest extends Model
{
    //

    protected $fillable = [
        'user_id',
        'email',
        'subject',
        'message',
        'status',
        
        'request_tok'
      
    ];
}
