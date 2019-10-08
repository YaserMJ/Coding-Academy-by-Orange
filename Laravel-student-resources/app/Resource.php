<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    //
    protected $fillable = [ 'name' , 'topic_id'];




    public function user(){

        return $this->belongsTo('App\User');

    }


    public function topic(){

        return $this->belongsTo('App\Topic');

    }


}
