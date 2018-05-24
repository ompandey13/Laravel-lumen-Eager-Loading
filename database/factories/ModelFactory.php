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

$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'author_id' => function () {
            return factory(App\Models\Author::class)->create()->id;
        },
        'body' => $faker->paragraphs(rand(3,10), true),
    ];
});

$factory->define(App\Models\Author::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'bio' => $faker->paragraph,
    ];
});

$factory->define(App\Models\Profile::class, function (Faker\Generator $faker) {
    return [
        'birthday' => $faker->dateTimeBetween('-100 years', '-18 years'),
        'author_id' => function () {
            return factory(App\Models\Author::class)->create()->id;
        },
        'city' => $faker->city,
        'state' => $faker->state,
        'website' => $faker->domainName,
    ];
});