<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Event;
use App\Model\Room;

class Channel extends Model
{
    use HasFactory;
    public $timestamps = "false";

    public function event(){
        return $this->belongsTo(Event::class);
    }

    public function rooms(){
        return $this->hasMany(Room::class);
    }
}
