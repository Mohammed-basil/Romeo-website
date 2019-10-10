<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'senderAccount','receiverAccount', 'senderName','receiverName','balance', 'coin'
    ];
}
