<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Trophyac;
use Faker\Generator as Faker;

$factory->define(Trophyac::class, function (Faker $faker) {
    return [
        'trophy_id' => $faker->numberBetween(1,3),
        'user_id' => $faker->numberBetween(1,50),
        'date' => $faker->dateTimeBetween('-5 years', '0years')->format('Y-m-d')
    ];
});
