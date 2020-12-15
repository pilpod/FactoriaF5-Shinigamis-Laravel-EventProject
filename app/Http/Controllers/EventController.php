<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Event::create([
            'title' => $request->title,
            'picture_path' => $request->picture_path,
            'short_description' => $request->short_description,
            'duration' => $request->duration,
            'description' => $request->description,
            'event_date' => $request->event_date,
            'event_capacity' => $request->event_capacity,
            'outstanding' => $request->outstanding,
            'hour' => $request->hour
        ]);

        return redirect()->route('adminDashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('eventEdit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $event->title = $request->title;
        $event->picture_path = $request->picture_path;
        $event->short_description = $request->short_description;
        $event->duration = $request->duration;
        $event->description = $request->description;
        $event->event_date = $request->event_date;
        $event->hour = $request->hour;
        $event->event_capacity = $request->event_capacity;
        $event->outstanding = $request->outstanding;

        $event->save();
        return redirect()->route('adminDashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return view('eventDeleted', ['message' => 'OHHH!! Evento eliminado correctamente.']);
    }
}
