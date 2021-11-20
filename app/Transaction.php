<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id',
        'debit',
        'credit',
        'description',
    ];

    public static function addTransaction($userId, $debit, $credit, $description){

        self::create([
            'user_id' => $userId,
            'debit' => $debit,
            'credit' => $credit,
            'description' => $description,
        ]);

    }
}
