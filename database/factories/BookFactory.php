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

$factory->define(App\Book::class, function (Faker $faker) {
    $user_id = DB::table('users')->pluck('id')->all();

    return [
    	'user_id' => $faker->randomElement($user_id),
        'title' => $faker->realText(100),
        'author' => $faker->name(),
        'description' => $faker->realText(100),
        'price' => $faker->numberBetween(100,1000),
        'image' => './images/1539931654.jpg',
        
    ];
});
