<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rate;
use Faker\Generator as Faker;

$factory->define(Rate::class, function (Faker $faker) {
    return [
      'date' => $faker->date($format = 'Y-m-d'),
      'buying_rate' => $faker->numberBetween(4, 0, 1000),
      'selling_rate' => $faker->numberBetween(4, 0, 1000),
      'middle_rate' => $faker->numberBetween(4, 0, 1000),
      'exchange_rates_id' => '1'
    ];
});
