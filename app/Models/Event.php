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
        'outstanding'
    ];

    public function users() 
    {
        return $this->belongsToMany('App\Models\User');
    }
    

}
