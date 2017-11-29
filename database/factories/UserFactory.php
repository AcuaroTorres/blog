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
    	'id' 		=> $faker->ean8,
        'name' 		=> $faker->name,
        'email' 	=> $faker->unique()->safeEmail,
        'password' 	=> $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

/*
|	$user = new App\User();
|   $user->id = 15287582;
|   $user->name = 'Alvaro';
|   $user->email = 'a@b.c';
|   $user->password = bcrypt('pluto');
|   $user->save();
|   $user->roles()->attach(App\Role::where('name', 'Admin')->first());
|   $user->roles()->attach(App\Role::where('name', 'Usuario')->first());
*/