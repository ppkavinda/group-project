<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'nic' => $faker->regexify('[0-9]{9}[vV]$'),
        'api_token' => str_random(60),
    ];
});

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
    ];
});

$factory->define(App\Course::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'subtitle' => $faker->sentence,
        'description' => $faker->paragraph,
        'category_id' => function () {
            return factory(App\Category::class)->create()->id;
        },
        'cover_img' => $faker->imageUrl($width = 640, $height = 480) // 'http://lorempixel.com/640/480/'
    ];
});

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->randomHtml(2, 5) . '<p>' . $faker->sentence . '</p>',
        'published' => $faker->boolean,
        'course_id' => function () {
            return factory(App\Course::class)->create()->id;
        },
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
    ];
});

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'body' => $faker->sentence,
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'post_id' => function () {
            return factory(App\Post::class)->create()->id;
        },
    ];
});