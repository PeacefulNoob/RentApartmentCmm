<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Property;
use Faker\Generator as Faker;

$factory->define(Property::class, function (Faker $faker) {
    return [
        'title'=> $faker->name,
        'description' => $faker->paragraphs(rand(3,7),true),
        'price' => $faker->randomFloat($nbMaxDecimals = 3, $min = 222, $max = 999),
        'size' => $faker->randomFloat($nbMaxDecimals = 2, $min = 22, $max = 99),
        'floor' => $faker->numberBetween(1,20),
        'persons' => $faker->numberBetween(1,20),
        'room_count' => $faker->numberBetween(1,8),
        'google_maps' => $faker->numberBetween(1,8),
        'user_id' => $faker->numberBetween(1,3),
        'location_id' => $faker->numberBetween(1,9),
        'property_type_id' => $faker->numberBetween(1,6),
        'special' => $faker->numberBetween(0,1),
            'street' => $faker->address,
    ];
});
