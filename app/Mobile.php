<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    protected $fillable = [
        'employee_id', 'numbers', 
    ];

    public function employee(){

        return $this->belongsTo('App\Employee');

    }
}
