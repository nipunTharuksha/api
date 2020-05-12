<?php

use App\Appointment;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AppointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {

        $now = Carbon::now();
        $yearAndMonth = $now->format('Y-m');
        $date = $now->format('d');

        $lastDayOfThisMonth = Carbon::parse(new Carbon('last day of this month'))->format('d');

        for ($i = $date; $i <= $lastDayOfThisMonth; $i++) {

            //Appointments starts from 08:00 and ends at 22:00

            for ($x = 8; $x < 22; $x++) {

                Appointment::create([

                    'date' => $yearAndMonth . '-' . $i,
                    'from' => Carbon::parse($x . ':00:00'),
                    'to' => Carbon::parse(($x + 1) . ':00:00')

                ]);

            }

        }

    }

}
