<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'type',
        'cryptocurrency',
        'cryptocurrency_address',
        'amount',
        'is_approved',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
