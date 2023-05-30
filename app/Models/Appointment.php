<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'client_id',
    //     'appointment_date_time',
    // ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
