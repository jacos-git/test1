<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'goods_id' => $faker->numberBetween(1,150),
        'user_id' => $faker->numberBetween(1,50),
        'date' => $faker->dateTimeBetween('-5 years', '0years')->format('Y-m-d')
    ];
});
