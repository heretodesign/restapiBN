<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\KlUsdReferenceRate;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(KlUsdReferenceRate::class, function (Faker $faker) {
    return [
      'date' => $faker->date($format = 'Y-m-d'),
      'rate' => $faker->randomNumber(2)
    ];
});
