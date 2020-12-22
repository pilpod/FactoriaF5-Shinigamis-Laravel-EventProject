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
        $subscribedEventUsers = [];
        foreach($events as $event){
            $usersCount = $events->find($event->id)->getEventUsers();
            array_push($subscribedEventUsers, $usersCount);
        }
        dd($subscribedEventUsers);
        return view('adminDashboard', ['events' => $events]);
    }

    public function create()
    {
        return view('eventCreate');
    }

    
    // public function getEventUsers($eventId) {

    //     $event = new Event();
    //     $event = $event->find($eventId);
    //     return $event->users()->get();
        
    // }
}
