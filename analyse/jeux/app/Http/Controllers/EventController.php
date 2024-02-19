<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function store(Request $request, $event )
    {
    
        $ev = new Event();
        $ev->event = $event;
        $ev->when = now();
        $ev->info = $request->ip();
        $ev->save();
 
        return response()->json($ev, 201);
    }    //


    public function storeTest( )
    {

        $event = new Event();
        $event->event = 'toto';
        $event->when = now();
        $event->info = '';
        $event->save();
 
        return response()->json($event, 201);
    }    //


}
