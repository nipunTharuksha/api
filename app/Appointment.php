<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    
    protected $primaryKey = 'id';
    protected $table = 'appointments';
    protected $fillable = ['date', 'from', 'to'];

}
