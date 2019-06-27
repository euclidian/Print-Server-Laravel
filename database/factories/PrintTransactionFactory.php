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

$factory->define(App\PrintTransaction::class, function (Faker $faker) {
    return [
        'printed_id' => rand(1000, 2000),
        'status' => rand(0, 1),
        'print_time' => date("Y-m-d h:i:s"),
        'user_id' => rand(1000, 2000),
        'json' => str_random(20),
        'url' => str_random(20)
    ];
});
