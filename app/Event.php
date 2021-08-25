<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    function comment_ranks()
    {
        return $this->belongsToMany(('App\Comment,comment_ranks'))
                    ->pluck('rank');
    }
}
