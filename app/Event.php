<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //

    function schedules()
    {
        return $this->belongsToMany('App\Schedule', 'event_schedules');
    }
}
