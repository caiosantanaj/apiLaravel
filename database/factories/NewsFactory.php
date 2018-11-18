<?php

use Faker\Generator as Faker;
use \App\Model\Category;
use \App\User;

$factory->define(App\Model\News::class, function (Faker $faker) {
    return [
        'title' => $faker -> word,
        'news' => $faker -> paragraph,
        'resume' => $faker -> realText($maxNbChars = 200, $indexSize = 2),
        'img_url' => $faker -> imageUrl($width = 800, $height = 600, 'cats'),
        'user_id' => User::all()->random(),
        'category_id' => Category::all()->random()->id,
    ];
});
