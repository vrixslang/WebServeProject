<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Channel;
use App\Model\Session;
use App\Model\Event;

class Room extends Model
{
    use HasFactory;
    public $timestamps = "false";

    public function channel(){
        return $this->belongsTo(Channel::class);
    }

    public function sessions(){
        return $this->hasMany(Session::class);
    }

    public function event(){
        return $this->hasMany(Event::class,'event_id','id');
    }
}
