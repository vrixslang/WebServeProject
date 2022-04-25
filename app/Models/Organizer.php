<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Event;

class Organizer extends Model
{
    use HasFactory;
    public $timestamps = "false";

    public function events(){
        return $this->hasMany(Event::class);
    }

    
}
