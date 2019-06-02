<?php

use Faker\Generator as Faker;

$factory->define(App\Message::class, function (Faker $faker) {
    return [
        // 'message_id' => $faker->
				'room_id' => $faker->numberBetween($min = 1, $max = 10),
				'created_at' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
				'users_toggle' => $faker->numberBetween($min = 0, $max = 1),
				'talk' => $faker->realtext($maxNbChars = 20),
    ];
});
