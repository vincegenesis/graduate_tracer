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

$factory->define(App\Csv::class, function (Faker $faker) {
    static $password;

    return [
        'studentId' 		=> $faker->creditCardNumber,
		'first_name' 		=> $faker->firstName,
		'last_name' 		=> $faker->lastName,
		'middle_name' 		=> $faker->lastName,
		'extension_name' 	=> null,
		'course' 			=> $faker->bs,
		'address' 			=> $faker->address,
		'contact_number' 	=> $faker->phoneNumber,
		'email' 			=> $faker->unique()->safeEmail,
		'batchyear' 		=> $faker->year,
    ];
});
