<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        "title" => $faker->name,
        "artist" => $faker->randomDigit(1, 50),
        "genre" => $faker->randomDigit(1, 10),
        "artworkPath" => $faker->imageUrl($width=300, $height=300)
    ];
});
