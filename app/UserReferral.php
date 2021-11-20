<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserReferral extends Model
{
    protected $fillable = [
      'user_id',
      'referral_id'
    ];
}
