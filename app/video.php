<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    public function comments() //this name comes from comments
    {
        return $this->morphMany('App\Comment','commentable');
    }

     //manytomany polimorphic
     public function tags(){
        return $this->morphToMany('App\tag','taggable');
    }

    
}
