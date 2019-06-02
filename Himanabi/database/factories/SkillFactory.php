<?php

use Faker\Generator as Faker;

$factory->define(App\Skill::class, function (Faker $faker) {
    return [
        //
    		'skills_users' => $faker->numberBetween($min = 1, $max = 10),
    		'toggle_user' => $faker->numberBetween($min = 0, $max = 1),
				'skills_category' => $faker->word(1),
				'skills_name' => $faker->word(1),
				'skills_experience' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 10),
				'skills_get' => $faker->numberBetween($min = 1, $max = 56),
				'skills_explanation' => $faker->realtext($maxNbChars = 100),
				'skills_enthusiasm' => $faker->realtext($maxNbChars = 100),
				'skills_area' => $faker->city(),

				'skills_picture' => $faker->image($dir = '/tmp'),
				'Interest01' => $faker->numberBetween($min = 0, $max = 1),
				'Interest02' => $faker->numberBetween($min = 0, $max = 1),
				'Interest03' => $faker->numberBetween($min = 0, $max = 1),
				'Interest04' => $faker->numberBetween($min = 0, $max = 1),
				'Interest05' => $faker->numberBetween($min = 0, $max = 1),
				'Interest06' => $faker->numberBetween($min = 0, $max = 1),
				'Interest07' => $faker->numberBetween($min = 0, $max = 1),
				'Interest08' => $faker->numberBetween($min = 0, $max = 1),
				'Interest09' => $faker->numberBetween($min = 0, $max = 1),
				'Interest10' => $faker->numberBetween($min = 0, $max = 1),
				'Interest11' => $faker->numberBetween($min = 0, $max = 1),
				'Interest12' => $faker->numberBetween($min = 0, $max = 1),
				'Interest13' => $faker->numberBetween($min = 0, $max = 1),
				'Interest14' => $faker->numberBetween($min = 0, $max = 1),
				'Interest15' => $faker->numberBetween($min = 0, $max = 1),
				'Interest16' => $faker->numberBetween($min = 0, $max = 1),
				'Interest17' => $faker->numberBetween($min = 0, $max = 1),
				'Interest18' => $faker->numberBetween($min = 0, $max = 1),
    ];
});
