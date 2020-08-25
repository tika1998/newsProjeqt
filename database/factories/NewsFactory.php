<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'category_id' => $faker->create(App\Category::class)->id,
        'title' => $faker->name,
        'short_description' => $faker->realText(50),
        'long_description' => $faker->realText(150),
        'avatar' => $faker->image('public/images',640,480, null, false),
    ];
});
