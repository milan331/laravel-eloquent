<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function employees(){
        //many to many inverse
        return $this->belongsToMany('App\Employee');

    }    

}
