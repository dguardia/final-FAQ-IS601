<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) {
    return [
        'tag' => $faker->randomElement(['Go', 'C', 'C++', 'C#', 'Dart', 'JavaScript', 'JScript', 'TypeScript', 'Java', 'Groovy', 'Kotlin', 'Perl', 'PHP', 'R', 'Rust', 'Scala', 'Swift']),
    ];
});
