<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class DetailsController extends Controller
{
    function show($event_id)
    {
        $event = Event::find($event_id);

        return view('events.show', ['event' => $event]);
    }
}
