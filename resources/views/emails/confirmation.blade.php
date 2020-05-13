@component('mail::message')

    Hey {{$liveAppointment->name}},

    We are pleased to inform you that your appointment has been confirmed. A summary of your appointment is provided below.

    Appointment Date:{{$liveAppointment->appointment->date}}
    Appointment Time:  From {{\Carbon\Carbon::parse($liveAppointment->appointment->from)->format("H:i A")}} to {{\Carbon\Carbon::parse($liveAppointment->appointment->to)->format("H:i A")}}
    Dentist:  Dentist_Name
    Link:. URL
    Passcode:

    If you have any questions about this booking, please email us at : email_address


    Thank you,

    ClinicName  Team


    {{--  @component('mail::button', ['url' => ''])
  Button Text
  @endcomponent--}}
    {{--
    Thanks,<br>
    {{ config('app.name') }}--}}
@endcomponent
