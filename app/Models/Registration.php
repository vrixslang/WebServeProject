<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Attendee;
use App\Model\SessionRegistration;
use App\Model\EventTicket;

class Registration extends Model
{
    use HasFactory;
    public $timestamps = "false";

    public function attendee(){
        return $this->belongsTo(Attendee::class);
    }

    public function session_registrations(){
        return $this->hasMany(SessionRegistration::class);
    }

    public function event_ticket(){
        return $this->belongsTo(EventTicket::class);
    }
}
