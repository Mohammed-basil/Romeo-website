<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{

    protected $fillable = [
        'user_id','office_name','office_phonenum', 'address'
    ];
    public function user ()
    {
return $this->belongsTo('App\User');

    }
}
