<?php

use Faker\Generator as Faker;

$factory->define(App\Skill::class, function (Faker $faker) {
    return [
			'user_id' => $faker->numberBetween($min = 1, $max = 10),
			'toggle_user' => $faker->numberBetween($min = 0, $max = 1),
			'skills_category' => $faker->word(1),
			'skills_name' => $faker->word(1),
			'skills_experience' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 10),
			'skills_get' => $faker->numberBetween($min = 1, $max = 56),
			'skills_explanation' => $faker->realtext($maxNbChars = 100),
			'skills_enthusiasm' => $faker->realtext($maxNbChars = 100),
			'skills_area' => $faker->city(),
			'skills_picture' => $faker->image($dir = '/tmp'),
			'interest01' => $faker->numberBetween($min = 0, $max = 1),
			'interest02' => $faker->numberBetween($min = 0, $max = 1),
			'interest03' => $faker->numberBetween($min = 0, $max = 1),
			'interest04' => $faker->numberBetween($min = 0, $max = 1),
			'interest05' => $faker->numberBetween($min = 0, $max = 1),
			'interest06' => $faker->numberBetween($min = 0, $max = 1),
			'interest07' => $faker->numberBetween($min = 0, $max = 1),
			'interest08' => $faker->numberBetween($min = 0, $max = 1),
			'interest09' => $faker->numberBetween($min = 0, $max = 1),
			'interest10' => $faker->numberBetween($min = 0, $max = 1),
			'interest11' => $faker->numberBetween($min = 0, $max = 1),
			'interest12' => $faker->numberBetween($min = 0, $max = 1),
			'interest13' => $faker->numberBetween($min = 0, $max = 1),
			'interest14' => $faker->numberBetween($min = 0, $max = 1),
			'interest15' => $faker->numberBetween($min = 0, $max = 1),
			'interest16' => $faker->numberBetween($min = 0, $max = 1),
			'interest17' => $faker->numberBetween($min = 0, $max = 1),
			'interest18' => $faker->numberBetween($min = 0, $max = 1),
			'interest19' => $faker->numberBetween($min = 0, $max = 1),
			'interest20' => $faker->numberBetween($min = 0, $max = 1),
    ];
});
