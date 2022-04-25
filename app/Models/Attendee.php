<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Registration;


class Attendee extends Model
{
    use HasFactory;
    public $timestamps = "false";

    public function registrations(){
        return $this->hasMany(Registration::class);
    }
}


