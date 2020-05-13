<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LiveAppointment extends Model
{
    protected $table = 'live_appointments';
    protected $primaryKey = 'id';

    protected $fillable = [
        'appointment_id', 'name', 'email','mobile_number', 'is_patient', 'type_of_issue', 'describe', 'currently_receiving_treatments',
        'currently_suffering_from_health_conditions', 'are_you_pregnant', 'diagnosed_with_covid19', 'currently_isolating',
        'what_do_you_like'
    ];

    public function appointment()
    {
        return $this->hasOne(Appointment::class,'id','appointment_id');
    }
}
