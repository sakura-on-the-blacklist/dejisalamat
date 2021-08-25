<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

class EventController extends Controller
{

    function show($event_id)
    {
        $event = Event::find($event_id);

        return view('events.show', ['event' => $event]);
    }

    public function show($id);
    {
        $event = Event::find($id);
        $ratings = $event->review_ratings();

        $sum = 0;
        foreach ($ratings as $id=>$value) {
            $sum+=$value;
        }

        if($sum == o){
            $event -> rating = 0;
        }else{
            $event -> rating = round($sum / count($rating), 1);
        }

        return view ('events.show', ['event'=>$event]);
    }
}

