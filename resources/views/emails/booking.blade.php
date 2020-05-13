@component('mail::message')


    Hey {{$liveAppointment->name}},

    Your booking has been placed.

    Thank you for your booking from the Clinic_name site. We will review your booking and send a confirmation email with the booking details.

    A summary of your booking is as follows:

    Booking Date : {{$liveAppointment->created_at}}
    Booking reference : {{$liveAppointment->id}}
    Appointment Date: {{$liveAppointment->appointment->date}}
    Appointment Time: From {{\Carbon\Carbon::parse($liveAppointment->appointment->from)->format("H:i A")}} to {{\Carbon\Carbon::parse($liveAppointment->appointment->to)->format("H:i A")}}
    Cost
    Payment Reference : XXXXX

    If you have any questions about this booking, please email us at : email_address


    Thank you,

    ClinicName  Team

    {{--@component('mail::button', ['url' => ''])
    Button Text
    @endcomponent--}}

    {{--Thanks,<br>
    {{ config('app.name') }}--}}
@endcomponent
