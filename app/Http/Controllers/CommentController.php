<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

class CommentController extends Controller
{
    function create($event_id)
    {
        $event = Event::find($event_id);
        return view('comments.create',['event'=>$event]);
    }
}
