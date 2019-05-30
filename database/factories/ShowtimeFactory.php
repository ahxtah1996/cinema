<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Showtime::class, function (Faker $faker) {
    return [
        'movie_id' => $faker->numberBetween($min = 1, $max = 9),
        'room_id' => $faker->numberBetween($min = 1, $max = 8),
        'timestart' => $faker->dateTimeBetween($startDate = '2019-06-01 23:59:59', $endDate = '2019-06-30 23:59:59', $timezone = null),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
