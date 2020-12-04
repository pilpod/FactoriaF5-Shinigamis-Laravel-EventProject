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

        if($userId == null) {
            return redirect('home');
        }

        $user = User::find($userId);
        // $event = Event::find($id);
        $userEvents = $user->events()->find($id);
       
        if($userEvents == null) {
            $user->events()->attach($id);
            return view('suscribeResponse', ['message' => 'Ole tu!!! Inscrito!!!']);
        }

        return view('suscribeResponse', ['message' => 'Ups!! Algo salio mal pringao, ya estas inscrito!!!']);
    }
}
