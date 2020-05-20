<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Songs;
use Faker\Generator as Faker;

$factory->define(Songs::class, function (Faker $faker) {
    return [
        "title" => $faker->name,
        "artist" => $faker->randomDigit(1,25)->randomDigitNot(0),
        "album" => $faker->randomDigit(1,25)->randomDigitNot(0),
        "genre" => $faker->randomDigit(1,25)->randomDigitNot(0)
    ];
});
