<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'investment_package_id',
        'invest_id',
        'user_id',
        'amount',
        'cryptocurrency',
        'is_approved',
    ];

    public function investmentPackage(){
        return $this->belongsTo(InvestmentPackage::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
