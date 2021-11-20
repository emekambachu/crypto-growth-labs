<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminWalletAddress extends Model
{
    protected $fillable = [
        'admin_id',
        'name',
        'address',
        'image'
    ];

    public function admin(){
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    }
}
