<?php

use Faker\Generator;
use SerhaTopcu\Translation\Language;

$factory->define(Language::class, function (Generator $faker) {
    return [
        'language' => $faker->word,
        'name' => $faker->word,
    ];
});
