<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Faq;
use Faker\Generator as Faker;

$factory->define(Faq::class, function (Faker $faker) {
    return [
        'question'=> 'Question Lorem ipsum',
        'answer'=>$faker->paragraphs(rand(2,5),true),
        'user_id' => $faker->numberBetween(1,10),
   ];
});
