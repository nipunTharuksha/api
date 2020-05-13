<?php

namespace App\Http\Controllers;

use App\Http\Resources\LiveAppointmentResource;
use App\LiveAppointment;
use App\Mail\BookingConfirmation;
use App\Mail\BookingEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LiveAppointmentController extends Controller
{

    /**Store new live appointment and send booking email and confirmation email
     * Then return new live appointment
     * @param Request $request
     * @return LiveAppointmentResource
     */
    public function store(Request $request)
    {
        $liveAppointment = LiveAppointment::create($request->all());
     //   dd($liveAppointment->appointment);
        //booking email
        Mail::to($liveAppointment->email)->send(new BookingEmail($liveAppointment));

        //Confirmation email

        Mail::to($liveAppointment->email)->send(new BookingConfirmation($liveAppointment));


        return new LiveAppointmentResource($liveAppointment);
    }

}
