<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{

    public function index()
    {
        $userId = auth()->id();
        $user = User::find($userId);
        $userEvents = $user->events()->orderBy('event_date', 'DESC')->get();
        return view('adminDashboard', ['events' => $userEvents]);
    }
}
