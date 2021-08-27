<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    function index()
    {
  
        $event = Event::where('country_id', 1,2) ->get();
       
        return view('events.show',['events' => $event]);
    }

    function comment_ranks()
    {
        return $this->hasMany('App\Comment')
                    ->pluck('rank');
    }

    function schedules()
    {
        return $this->belongsToMany('App\Schedule', 'event_schedules');

    }

   
}
