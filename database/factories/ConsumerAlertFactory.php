<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ConsumerAlert;
use Faker\Generator as Faker;

$factory->define(ConsumerAlert::class, function (Faker $faker) {
    return [
      'name' => $faker->name,
      'registration_number' => $faker->randomNumber,
      'added_date' => $faker->date($format = 'Y-m-d'),
    ];
});
