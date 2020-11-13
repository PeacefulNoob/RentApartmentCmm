<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PropertyImage;
use Faker\Generator as Faker;

$factory->define(PropertyImage::class, function (Faker $faker) {
    return [
        'image' => 'properties.png',
        'property_id' => $faker->numberBetween(1,100),

    ];
});
