<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;

class AdminController extends Controller
{

    public function index()
    {
        $events = Event::orderBy('event_date', 'ASC')->get();
        
        return view('adminDashboard', ['events' => $events]);
    }

    public function create()
    {
        return view('eventCreate');
    }

    
}
