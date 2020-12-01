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
        $events = Event::whereDate('event_date', '>=' , $datenow)->orderBy('event_date', 'ASC')->paginate(6)->withPath('nextevents');
        $pastEvents = Event::whereDate('event_date', '<' , $datenow)->orderBy('event_date', 'DESC')->limit(3)->get();
        return view('index', compact('events', 'pastEvents'));
    }

    public function pastEvents()
    {
        
    }

    
}
