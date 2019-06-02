<?php

use Faker\Generator as Faker;

$factory->define(App\Likeit::class, function (Faker $faker) {
    return [
        //
    		// 'likeit_id' => $faker->
				'users_id' => $faker->numberBetween($min = 1, $max = 10),
				'skills_id' => $faker->numberBetween($min = 1, $max = 20),
    ];
});
