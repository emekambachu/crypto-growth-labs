<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserWalletAddress extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'address',
        'barcode'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
