<?php

use Faker\Generator as Faker;

$factory->define(\Cart::class, function (Faker $faker) {
    $product = factory('App\Product')->create();

        // 'user_id' => function () {
        //     return factory('App\User')->create()->id;
        // },
        // 'product_id' => function () {
        //     return factory('App\Product')->create()->id;
        // },
        // 'quantity' => $faker->numberBetween(1, 10),

        $cartItem = \Cart::add(
            $product->id, $product->name, 2, $product->price, 
            ['img1' => $product->img1, 'img2' => $product->img2, 'img3' => $product->img3]
        );
        return $cartItem->toArray();
});
