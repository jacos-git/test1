<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    $sex = $faker->randomElement($array=['male','female']);
    $address_all = $faker->address();
    $address = explode(" ", $address_all, 2);
    $code1 = floor($address[0] / 10000);
    $code2 = $address[0] % 10000;

    return [
        'name' => $faker->name($sex),
        'sex' => $sex,
        'weight' => $faker->randomFloat($nbMaxDecimals = 1, $min = 40, $max = 70),
        'birthday' => $faker->dateTimeBetween('-45 years', '-18years')->format('Y-m-d'),
        'postal_code' => $code1 . "-" . $code2,
        'address' => $address[1],
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$DTFoF0wmw5qudX4uxTHQgus/4Wk21hK6SgLUmJ6JXIEOPPdXC7yjK',
        'community_id' => $faker->numberBetween(1000,1006),
        'remember_token' => Str::random(10),
    ];
});

/*$factory->define(App\Person::class,
    function (Faker $faker) {
        return [
            'name' => $faker->name,
            'mail' => $faker->safeEmail,
            'age' => random_int(1,99),
        ];
    });
*/