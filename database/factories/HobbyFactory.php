
<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
 $factory->define(App\User::class, function (Faker\Generator $faker) {
        return
        [
        	'id_user' => $faker->unique()->id;
        	'hobby_one' => $faker->word,
        	'hobby_two' => $faker->word
        ]
        });