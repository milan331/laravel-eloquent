<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
    'textblog' => 'App\Textblog',
    'video' => 'App\video',
]);


class tag extends Model
{
    public function taggable() //this name comes from taggable & id column from taggable table
    {
        return $this->morphTo();
    }
}
