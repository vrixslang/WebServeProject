<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Room;
use App\Model\SessionRegistration;

class Session extends Model
{
    use HasFactory;
    public $timestamps = "false";

    public function room(){
        return $this->belongsTo(Room::class);
    }

    public function session_registration(){
        return $this->hasMany(SessionRegistration::class);
    }
}
