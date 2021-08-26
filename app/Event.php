<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    function comment_ranks()
    {
        return $this->hasMany('App\Comment’)
                    ->pluck('rank');
    }
}
