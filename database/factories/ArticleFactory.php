<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 10),
        'title' => $faker->realText(50),
        'body' => $faker->realText(2000),
    ];
});
