<?php

namespace App;
use Cog\Contracts\Ban\Bannable as BannableContract;
use Cog\Laravel\Ban\Traits\Bannable;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements BannableContract
{
    use Notifiable;
    use Bannable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email', 'password','country_id','phonenum','userID','category_id','admin','account_number','image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function point()
    {

     return $this->hasOne('App\Point');
    }
    public function logs()
    {

    return $this->hasMany('App\Exchangelog');
    }

    public function pages()
    {
        return $this->belongsToMany('App\Page');
    }

    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }

    public function category()
    {
      return $this->belongsTo('App\Category');

    }

    public function office()
    {
      return $this->hasOne('App\Office');

    }
    public function country()
    {
        return $this->belongsTo('App\Country');

    }

    
}
