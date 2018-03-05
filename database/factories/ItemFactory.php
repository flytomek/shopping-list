<?php

use Faker\Generator as Faker;

$factory->define(App\Item::class, function (Faker $faker) {
    return [
        'name' => substr($faker->sentence(rand(1,3)), 0, -1),
        'quantity' => rand(1,5)
    ];
});
