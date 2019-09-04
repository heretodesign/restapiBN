<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BaseRate;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(BaseRate::class, function (Faker $faker) {
  return [
    'bank_code' => $faker->randomNumber(),
    'bank_name' => $faker->name,
    'base_rate' => $faker->numberBetween(4, 0, 1000),
    'indicative_eff_lending_rate' => $faker->numberBetween(4, 0, 1000),
    'base_lending_rate' => $faker->numberBetween(4, 0, 1000),
  ];
});
