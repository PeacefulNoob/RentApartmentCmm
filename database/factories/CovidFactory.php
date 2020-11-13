<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Covid;
use Faker\Generator as Faker;

$factory->define(Covid::class, function (Faker $faker) {
    return [
        'title'=> $faker->name,
        'subtitle'=> $faker->name,
        'description' => $faker->paragraphs(rand(3,7),true),
        'user_id' => $faker->numberBetween(1,3),
    ];
});
