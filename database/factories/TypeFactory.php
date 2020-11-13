<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PropertyType;
use Faker\Generator as Faker;

$factory->define(PropertyType::class, function (Faker $faker) {
    return [
        'title'=> $faker->name,
        'photoUrl'=> $faker->name,

    ];
});
