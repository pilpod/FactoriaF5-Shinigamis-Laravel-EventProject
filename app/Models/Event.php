<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'picture_path',
        'short_description',
        'duration',
        'description',
        'event_date',
        'event_capacity',
        'outstanding',
        'hour'
    ];

    protected $dates = [
        'event_date',
    ];

    public function users() 
    {
        return $this->belongsToMany('App\Models\User');
    }
    
    public function getEventUsers() {
        $users = $this->users()->get();
        
        return count($users);
    }
}
