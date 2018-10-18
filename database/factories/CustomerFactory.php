<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
    	'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('123123'),
        'remember_token' => str_random(10),
        'gender' => $faker->randomElement(['male', 'female']),
        'address' => $faker->state,
    ];
});
