<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $purchase_price = rand(5, 100);
    $sale_price = $purchase_price + $purchase_price * 0.25;
    return [
    	'purchase_price' => $purchase_price,
    	'sale_price' => $sale_price,
    	'utility' => $sale_price - $purchase_price,
        'category_id' => rand(1, 4)
    ];
});
