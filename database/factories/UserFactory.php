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
    static $password;

    return [
        'studentID' 		=> $faker->creditCardNumber,
		'first_name'	 	=> $faker->firstName,
		'last_name' 		=> $faker->lastName,
		'email' 			=> $faker->unique()->safeEmail,
		'username' 			=> $faker->userName,
		'password' 			=> bcrypt('secret'),
		'profile_picture' 	=> "",
		'login_type' 		=> "",
		'fb_id' 			=> "",
		'linkedin_id' 		=> "",
		'remember_token' => str_random(10)
    ];
});
