<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class passport extends Model
{
    protected $fillable = [
        'employee_id', 'number', 
    ];

    public function employee(){

        return $this->belongsTo('App\Employee');

    }
}
