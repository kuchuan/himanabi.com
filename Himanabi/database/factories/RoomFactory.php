<?php

use Faker\Generator as Faker;

$factory->define(App\Room::class, function (Faker $faker) {
    return [
				// 'skills_id' => $faker->numberBetween($min = 1, $max = 20),
				'follow_user_id' => $faker->numberBetween($min = 1, $max = 10),
    ];
});
