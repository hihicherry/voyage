<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        "title" => $faker->name,
        "artist" => $faker->randomDigit(1,25)->randomDigitNot(0),
        "album" => $faker->randomDigit(1,25)->randomDigitNot(0),
        "genre" => $faker->randomDigit(1,25)->randomDigitNot(0)
    ];
});
