<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        "name"              => $faker->name,
        "count"             => $faker->numberBetween(1, 100),
        "department_id"     => 1,
    ];
});
