<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Event;

class IndexController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es');
    }

    public function index()
    {
        $datenow = date('Y-m-d', time());
        $outstanding = Event::where('outstanding', '=' , true)->orderBy('event_date', 'ASC')->limit(5)->get();
        $events = Event::whereDate('event_date', '>=' , $datenow)->orderBy('event_date', 'ASC')->paginate(6);
        $pastEvents = Event::whereDate('event_date', '<' , $datenow)->orderBy('event_date', 'DESC')->limit(3)->get();
        return view('index', compact('outstanding','events', 'pastEvents'));
    }

    public function pastEvents()
    {
        $datenow = date('Y-m-d', time());
        $pastEvents = Event::whereDate('event_date', '<' , $datenow)->orderBy('event_date', 'DESC')->paginate(9);
        return view('pastevents', compact('pastEvents'));
    }

    
}
