<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserReferral extends Model
{
    protected $fillable = [
      'user_id',
      'referee_id',
      'referee_number',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
