<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Console\Scheduling\Event as SchedulingEvent;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'start_date' => 'required',
            'end_date' => 'required' ,
            'price' => 'required'
        ]);
        $event = new Event($request->all());
        $event->save();
        return redirect()->route('events.index');
    }

    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'start_date' => 'required',
            'end_date' => 'required' ,
            'price' => 'required'
        ]);
        $event->update($request->all());
        return redirect()->route('events.index');
    }

    public function destroy($id)
    {
        Event::destroy($id);
        return redirect()->route('events.index');
    }
}
