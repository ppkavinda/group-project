<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'price' => $faker->randomFloat(2, 0, 4000),
        'quantity' => $faker->randomDigit(),
        'description' => $faker->paragraph(6, true),
        'user_id' => function () {
            return factory('App\User')->create()->id;
        },
        'img1' => $faker->imageUrl($width = 640, $height = 480),
        'img2' => $faker->imageUrl($width = 640, $height = 480),
        'category_id' => function () {
            return factory('App\Category')->create();
        },
        'ratings' => $faker->randomFloat(1, 0, 5),
    ];
});
