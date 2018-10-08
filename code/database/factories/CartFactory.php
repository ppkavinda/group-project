<?php

use Faker\Generator as Faker;

$factory->define(App\cart::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory('App\User')->create()->id;
        },
        'product_id' => function () {
            return factory('App\Product')->create()->id;
        },
        'quantity' => $faker->numberBetween(1, 10),
    ];
});
