<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','username', 'email', 'password','mobile','type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
     public function rullers()
    {
        return $this->hasMany('App\Ruller');
    }

       public function parents()
    {
        return $this->hasMany('App\Parents');
    }

       public function Students()
    {
        return $this->hasMany('App\Students');
    }
      public function teacher()
    {
        return $this->hasMany('App\Teacher');
    }
}
