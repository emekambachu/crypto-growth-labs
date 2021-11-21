<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Wallet;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'referral_number',
        'password',
        'password_backup',
        'mobile',
        'country',
        'state',
        'address',
        'image',
        'valid_id',
        'is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function wallet(){
        return $this->hasOne(Wallet::class, 'user_id', 'id');
    }

    public function userWalletAddresses(){
        return $this->hasMany(UserWalletAddress::class, 'user_id', 'id');
    }

    public function userReferrals(){
        return $this->hasMany(UserReferral::class, 'user_id', 'id');
    }

    public function investments(){
        return $this->hasMany(Investment::class);
    }

	public function withdrawals(){
        return $this->hasMany(Withdrawal::class);
    }
}
