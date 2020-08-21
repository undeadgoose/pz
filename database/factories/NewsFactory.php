<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'author' => 'Sample Author',
        'description' => 'This is the description of the news',
        'body' => 'This is the body of the news. Dummy texts dummy texts dummy texts dummy texts dummy texts dummy texts',
    ];
});
