<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    function event_schedules()
    {
        return $this->hasMany('App\Event');
    }
}
