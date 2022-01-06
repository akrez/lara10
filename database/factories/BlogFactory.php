<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->text,
        'abstract' => $faker->paragraph,
        'img_url' => 'https://localhost/lara10/public/images/sample.jpg',
    ];
});
