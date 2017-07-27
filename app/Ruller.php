<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruller extends Model
{
    protected $table="ruller";

     function user()
    {
    	return $this->belongsTo('App\User');
    }
}
