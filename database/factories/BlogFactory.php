<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title'=> $faker->name,
        'image'=> 'sea.png',
        'description' => $faker->paragraphs(rand(3,7),true),
        'user_id' => $faker->numberBetween(1,3),
    ];
});
