<?php

use Faker\Generator as Faker;

$factory->define(App\Item::class, function (Faker $faker) {
    return [
        'title' => $faker->sentance, 
        'description' => $faker->paragraph, 
        'completed' => $faker->boolean
    ];
});
