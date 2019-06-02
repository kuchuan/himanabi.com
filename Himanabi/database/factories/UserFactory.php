<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        // 'name' => $faker->name,
        // 'email' => $faker->unique()->safeEmail,
        // 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        // 'remember_token' => str_random(10),

  			    'name' => $faker->name(), //名前 （日本語）
				'nickname' => $faker->firstKanaName(), // 単語
				'email' => $faker->unique()->safeEmail,
                'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
				'password' => $faker->password(),
				'language' => $faker->country(),
				'area' => $faker->city(),
				'picture' => $faker->image($dir = '/tmp'),
    ];
});
