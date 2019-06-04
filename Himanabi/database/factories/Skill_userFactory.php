<?php

use Faker\Generator as Faker;

$factory->define(App\Skill_user::class, function (Faker $faker) {
    return [
			'user_id' => $faker->numberBetween($min = 1, $max = 10),
			'skill_id' => $faker->numberBetween($min = 1, $max = 20),
    ];
});
