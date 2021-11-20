<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvestmentPackage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'min',
        'max',
        'referral_bonus',
        'monthly_profit',
        'days_turnover',
        'expert_advice',
        'deposit_bonus',
        'description',
        'roi',
        'compound_roi',
        'is_active',
    ];
}
