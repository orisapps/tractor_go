<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmer_transactions extends Model
{
    //
  protected $fillable = [
    'id',
    'fullname',
    'farmer_id',
    'subscription_title',
    'amount',
    'phone',
    'item',
    'service_type',
    'building_specification',
    'subscription_type',
    'transaction_status',
    'paystack_ref',
    'notes',
    'email',
  ];

}
