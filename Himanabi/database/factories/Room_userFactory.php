<?php

use Faker\Generator as Faker;

$factory->define(App\Room_user::class, function (Faker $faker) {
    return [
      'skill_id' => $faker->numberBetween($min = 1, $max = 40),
			'user_id' => $faker->numberBetween($min = 1, $max = 10),
    ];
});
