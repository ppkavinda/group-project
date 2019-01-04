<?php

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'status' => 0,
        'address1' => $faker->address,
        'address2' => $faker->address,
        'city' => $faker->city,
        'postal_code' => $faker->postcode,
        'telephone' => $faker->phonenumber,
        'user_id' => function () {
            return factory('App\User')->create()->id;
        },
    ];
});
