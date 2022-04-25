<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EventTicket;
use App\Models\Organizer;
use App\Models\Channel;
use App\Models\Room;
use App\Models\Session;

class Event extends Model
{
    use HasFactory;
    public $timestamps = "false";

    public function event_tickets(){
        return $this->hasMany(EventTicket::class);
    }

    public function organizer(){
        return $this->belongsTo(Organizer::class);
    }

    public function channels(){
        return $this->hasMany(Channel::class);
    }

    public function room(){
        return $this->hasMany(Room::class,'channel_id','id');
    }

    public function session(){
        return $this->hasMany(Session::class,'room_id','id');
    }
}
