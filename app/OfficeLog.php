<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficeLog extends Model
{
    protected $fillable = [
        'senderAccount','senderName','officeName', 'officeAccount', 'reciverName', 'reciverID', 'reciverPhone', 'coin', 'balance_before_fee', 'balance_after_fee', 'website_fee', 'office_fee','total_fee', 'status_id'
    ];

    public function status()
    {
      return $this->belongsTo('App\Status');

    }
}
