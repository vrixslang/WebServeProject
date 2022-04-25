<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Event;
use App\Model\Registration;

class EventTicket extends Model
{
    use HasFactory;
    public $timestamps = "false";

    public function event(){
        return $this->belongsTo(Event::class);
    }

    public function registrations(){
        return $this->hasMany(Registration::class);
    }
}
