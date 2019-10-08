<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    //
    protected $fillable =[ 'name' ];

    public function user(){

        return $this->hasMany('App\User');

    }

    public function university(){

        return $this->belongsToMany('App\University');

    }


    public function subject(){

        return $this->hasMany('App\Subject');

    }

}
