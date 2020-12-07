<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        "name" => $faker->company(),
        'email' => $faker->unique()->companyEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$DTFoF0wmw5qudX4uxTHQgus/4Wk21hK6SgLUmJ6JXIEOPPdXC7yjK',
        'remember_token' => Str::random(10),
    ];
});
