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
        $userEvents = $user->events()->find($id);
               
        if($userEvents == null) {
            $user->events()->attach($id);
            $event = $user->events()->find($id);
            return view('suscribeResponse', ['message' => 'Ole tu!!! Inscrito!!!']);
        }

        return view('suscribeResponse', [
            'message' => 'Ups!! Algo salio mal pringao, ya estas inscrito!!!']);
    }

    public function unsubscribe($id)
    {
        $userId = auth()->id();
        $user = User::find($userId);
        $userEvent = $user->events()->find($id);
        $user->events()->detach($id);
        return view('unsubscribeResponse', [
            'message' => 'Unsubscribe satisfactorio del evento ',
            'title' => $userEvent->title]);
    }

    
}
