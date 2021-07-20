<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\passport;
use App\Mobile;
use App\Role;

class Employee extends Model
{
    protected $fillable = [
         'name', 
    ];

    public function passport(){
        //one to one 
        return $this->hasOne('App\passport');

    }

    public function mobiles(){
        //one to many
        return $this->hasMany('App\Mobile');

    }    

    public function roles(){
        //many to many
        return $this->belongsToMany('App\Role');
        // with pivot
        // return $this->belongsToMany('App\Role')->withPivot('created_at');
        // return $this->belongsToMany('App\Role')->withTimestamps();

    }    

}
