<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $fillable = [
        'amount', 'sender_account', 'reciever_account','created_at',
    ];
}
