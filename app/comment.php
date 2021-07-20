<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
    'textblog' => 'App\Textblog',
    'video' => 'App\video',
]);

class comment extends Model
{
    public function commentable() //this name comes from commentable_type & id column from comment table
    {
        return $this->morphTo();
    }
    
}
