<?php

use Faker\Generator as Faker;

$factory->define(App\Album::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(random_int(3, 5)),
        'artist_id' => function () {
            return factory(App\Artist::class)->create()->id;
        },
        'genre_id' => function () {
            return factory(App\Genre::class)->create()->id;
        }
    ];
});
