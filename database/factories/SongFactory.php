<?php

use Faker\Generator as Faker;

$factory->define(App\Song::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(random_int(3, 5)),
        'album_id' => random_int(1, 10)
    ];
});
