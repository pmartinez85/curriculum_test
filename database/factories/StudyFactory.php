<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Scool\Curriculum\Models\Study::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,

    ];
});
