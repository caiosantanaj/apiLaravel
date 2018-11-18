<?php

use Faker\Generator as Faker;
use \App\User;
use \App\Model\News;

$factory->define(App\Model\Review::class, function (Faker $faker) {
    return [
        'review' => $faker->paragraph,
        'rate' => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 5),
        'user_id' => User::all()->random()->id,
        'news_id' => News::all()->random()->id,
    ];
});
