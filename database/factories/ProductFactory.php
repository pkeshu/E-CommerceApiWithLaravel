<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\model\product;
use Faker\Generator as Faker;

$factory->define(product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'detail' => $faker->paragraph,
        'price' => $faker->numberBetween(100, 1000),
        'stock' => $faker->randomDigit,
        'discout' => $faker->numberBetween(2, 30)
    ];
});
