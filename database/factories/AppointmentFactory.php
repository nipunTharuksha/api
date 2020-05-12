<?php

/** @var Factory $factory */

use App\Appointment;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Appointment::class, function (Faker $faker) {

 /*   $today = Carbon::now();
    $lastDayOfThisMonth = Carbon::parse(new Carbon('last day of last month'));

    $diff = $lastDayOfThisMonth->diffInDays($today);

    for ($i = 0; $i > 5; $i++) {

      //  $date = $today->addDays($i);

      /*  Appointment::create([
            'date' => $date,
            'from' => '1',
            'to' => '1'
        ]);

        return [
        'date' => $faker->dateTimeBetween('+0 days', '+1 month'),
        'from' => '1',
        'to' => '1'
    ];
    }
    /* return [
         'date' => $faker->dateTimeBetween('+0 days', '+1 month'),
         'from' => '1',
         'to' => '1'
     ];*/

});
