<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventSchedule extends Model
{
    //
    function schedule()
    {
        return $this->belongsTo('App\Schedule');
    }

    function event()
    {
        return $this->belongsTo('App\Event');
    }

}
