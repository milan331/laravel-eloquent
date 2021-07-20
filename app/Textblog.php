<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Textblog extends Model
{   
    //polymorphic
    public function comments() //this name comes from commentable_type & id column from comment table
    {
        return $this->morphMany('App\Comment','commentable');
    }
    
    //manytomany polimorphic
    public function tags(){
        return $this->morphToMany('App\tag','taggable');
    }

}
