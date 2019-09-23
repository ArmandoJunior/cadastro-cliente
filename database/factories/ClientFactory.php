<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    $gender = $faker->randomElement(['male', 'female']);

    return [
        'name' => $faker->name($gender),
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'date_birth' => $faker->dateTimeBetween('-60 years', '-18 years'),
        'sex' => ($gender === 'male') ? 'm' : 'f',
        'marital_status' =>rand(1, 3),
        'company_name' => $faker->company
    ];
});

