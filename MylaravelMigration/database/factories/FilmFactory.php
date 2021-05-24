<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Film;
use Faker\Generator as Faker;

$factory->define(Film::class, function (Faker $faker) {
    return [
      'title' => $faker -> word,
      'original_title' => $faker -> word,
      'nationality' => $faker -> state,
      'date' => $faker -> date,
      'vote' => $faker -> numberBetween(1, 5),
    ];
});
