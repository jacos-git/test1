<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Goods;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Goods::class, function (Faker $faker) {
    $sex = $faker->randomElement($array=['メンズ','レディース']);
    $category1 = $faker->randomElement($array=['トップス','ボトムス','アクセサリー']);
    if ( strcmp($category1, 'トップス') == 0 ) {
        $category2 = $faker->randomElement($array=['シャツ','タンクトップ','パーカー']);
    } else if ( strcmp($category1, 'ボトムス') == 0) {
        $category2 = 'パンツ';
    } else {
        $category2 =  $faker->randomElement($array=['シューズ','キャップ']);
    }
    if (strcmp($category2, 'シューズ') == 0) {
        $size =  $faker->randomElement($array=['24cm','24.5cm','25cm','25.5cm','26cm','26.5cm','27cm','27.5cm','28cm']);
    } else {
        $size = $faker->randomElement($array=['S','M','L']);
    }

    return [
        'goods_name' => $category2 . '-' .  $faker->numberBetween(1,150),
        'goods_image' => 'goods_image' . $faker->unique()->numberBetween(1,150) . '.png',
        'price' => round($faker->numberBetween(3000,10000), -2),
        'category1' => $category1,
        'category2' => $category2,
        'size' => $size,
        'color' => $faker -> safeColorName(),
        'sex' => $sex,
        'company_id' => $faker->numberBetween(1,15),
    ];
});
