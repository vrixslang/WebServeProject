<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Session;
use App\Model\Registration;

class SessionRegistration extends Model
{
    use HasFactory;
    public $timestamps = "false";

    public function session(){
        return $this->belongsTo(Session::class);
    }

    public function registration(){
        return $this->belongsTo(Registration::class);
    }
}
