<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Category::class, function (Faker $faker) {
    return [
        'name' => $faker -> word,
        'description' => $faker -> paragraph,
    ];
});
