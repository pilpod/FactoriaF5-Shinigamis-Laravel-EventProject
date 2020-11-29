<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
   protected $fillable = [

       'title',
       'img',
       'short_description',
       'long_description',
       'event_date',
       'capacity',
       'outstanding'
   ];
}
