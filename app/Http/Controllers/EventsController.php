<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{
    public function index(Request $request)
    {
        $data = Event::select('id', 'title', 'start', 'end')
            ->where([
                ['start', '>=', $request->input('start')],
                ['end', '<=', $request->input('end')]
                    ]
            )
            ->get();
        return $data;
    }

    public function addEvent($date_start)
    {
        $date = new Carbon($date_start);
        $date = $date->format('Y-m-d\TH:m');
        return view('addEvent', compact('date'));
    }

    public function saveEvent(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|max:400',
            'location' => 'required|max:1000',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date'
        ]);

        $event = new Event();
        $event->title = $request->input('title');
        $event->location = $request->input('location');
        $event->start = $request->input('start_date');
        $event->end = $request->input('end_date');
        $event->save();
        return redirect('/');
    }

    public function getEvent($id)
    {
        $event = Event::find($id);
        return view('viewEvent', compact('event'));
    }

    public function editEvent($id)
    {
        $event = Event::find($id);
        return view('updateEvent', compact('event'));
    }

    public function updateEvent(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'title' => 'required|max:400',
            'location' => 'required|max:1000',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date'
        ]);

        $event = Event::find($request->input('id'));
        $event->title = $request->input('title');
        $event->location = $request->input('location');
        $event->start = $request->input('start_date');
        $event->end = $request->input('end_date');
        $event->save();
        return redirect('/');
    }

    public function deleteEvent($id)
    {
        Event::find($id)->delete();
        return redirect('/');
    }
}
