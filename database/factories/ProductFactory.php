<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'title'     => $faker->text(155),
        'name'      => $faker->randomElement(['Phone', 'Shirt', 'Shoes', 'Laptop', 'Tablet']),
        'price'     => $faker->randomFloat(2, 2, 300),
        'category'  => $faker->randomElement(['Home', 'Electronics', 'Fashion', 'Cosmetics']),
        'brand'     => $faker->randomElement(['Apple', 'Amazon', 'Google', 'DK', 'H&M', 'GAP']),
        'image'     => $faker->imageUrl(),
        'logo'      => $faker->imageUrl(),
    ];
});
