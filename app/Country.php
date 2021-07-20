<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function posts(){
        //hasManyThrough (country,student,post)
        return $this->hasManyThrough('App\Post','App\Student');

    }    
}
