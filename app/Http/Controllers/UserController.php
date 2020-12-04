<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;

class UserController extends Controller
{
    public function subscribe($id)
    {
        $userId = auth()->id();
        $user = User::find($userId);
        $event = Event::find($id);
        $userEvents = $user->events()->find($id);
       
        if($userEvents == null) {
            $user->events()->attach($id);
            return view('suscribeResponse', ['message' => 'De puta madre!!!']);
        }

        return view('suscribeResponse', ['message' => 'Ups!! Algo salio mal pringao!!!']);
    }
}
