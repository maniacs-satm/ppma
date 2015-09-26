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

$factory->define(\App\Model\CategoryModel::class, function ($faker) {
    /* @var Faker\Generator $faker */

    return [
        'name' => $faker->unique()->randomElement(['Shop', 'E-Mail', 'Social'])
    ];
});