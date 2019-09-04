<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ExchangeRate;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(ExchangeRate::class, function (Faker $faker) {
    return [
      'currency_code' => $faker->name,
      'unit' => $faker->randomNumber(2)
    ];
});
