<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    //

    protected $fillable =[ 'name' ];




    public function user(){

        return $this->hasMany('App\User');

    }




    public function major(){

        return $this->belongsToMany('App\Major');

    }
}
