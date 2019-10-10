<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exchangelog extends Model
{
    protected $fillable = [

       'user_id','account_number','from','to', 'sale', 'buy', 'amount_from', 'amount_to', 'operation'

    ];

     public function user()
    {
        return $this->hasMany('App\User');
    }
}
