<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    //
    protected $fillable =[ 'name', 'subject_id' ];


    public function subject(){

        return $this->belongsTo('App\University');

    }


    public function resource(){

        return $this->hasMany('App\Resource');

    }
}
