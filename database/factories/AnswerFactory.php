<?php

use Faker\Generator as Faker;
use App\Answer;
use App\User;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(Answer::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraphs(rand(3, 7), true),
        'user_id' =>  User::pluck('id')->random(),
        // 'votes_count' => rand(0, 5),
    ];
});
