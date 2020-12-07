<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Administrator;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Administrator::class, function (Faker $faker) {
    return [
        "name" => $faker->name(),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$DTFoF0wmw5qudX4uxTHQgus/4Wk21hK6SgLUmJ6JXIEOPPdXC7yjK',
        'remember_token' => Str::random(10),
    ];
});
