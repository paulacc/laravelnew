<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'rating' => $faker->randomFloat()
    ];
});
