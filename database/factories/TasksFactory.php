<?php

use Faker\Generator as Faker;

$factory->define(App\Tasks::class, function (Faker $faker) {
    return [
        'title' => $faker->sentance, 
        'description' => $faker->paragraph, 
    ];
});
