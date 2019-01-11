<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'price' => $faker->randomFloat(2, 0, 4000),
        // 'amount' => $faker->randomDigit(),
        'description' => $faker->paragraph(6, true),
        'user_id' => function () {
            return factory('App\User')->create()->id;
        },
        'img1' => 'img/products/sample.png',
        'img2' => 'img/products/sample.png',
        'img3' => 'img/products/sample.png',
        'category_id' => $faker->numberBetween(1, 4),
        'kind' => $faker->words(2, true),
        'type' => $faker->words(2, true),
        // 'sizes' => $faker->randomElement(['M', 'S', 'L']),
        'ratings' => $faker->randomFloat(1, 0, 5),
    ];
});
