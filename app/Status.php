<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    

    public function officelogs ()
    {
      return $this->hasMany('App\OfficeLog');

    }
}
