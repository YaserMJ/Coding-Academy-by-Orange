<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{

    protected $fillable =[ 'name' , 'major_id' ];


    public function major(){

        return $this->belongsTo('App\Major');

    }



    public function topic(){

        return $this->hasMany('App\Topic');

    }


}
