<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\InterestRate;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(InterestRate::class, function (Faker $faker) {
    return [
      'product' => $faker->name,
      'date' => $faker->date($format = 'Y-m-d'),
      'overnight' => $faker->numberBetween($min = 0, $max = 100),
      '1_week' => $faker->numberBetween($min = 0, $max = 100),
      '1_month' => $faker->numberBetween($min = 0, $max = 100),
      '3_months' => $faker->numberBetween($min = 0, $max = 100),
      '6_months' => $faker->numberBetween($min = 0, $max = 100),
      '1_year' => $faker->numberBetween($min = 0, $max = 100)
    ];
});
