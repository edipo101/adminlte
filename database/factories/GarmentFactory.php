<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Garment;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Garment::class, function (Faker $faker) {
	$purchase_price = rand(2, 100);
    $sale_price = $purchase_price + $purchase_price * 0.25;
    $product = Product::create([
    	'purchase_price' => $purchase_price,
    	'sale_price' => $sale_price,
    	'utility' => $sale_price - $purchase_price,
        'category_id' => 3
    ]);

    $types = ['POLERA', 'CANGURO', 'CHAMARRA'];
    $colors = ['BLANCO', 'ANARANJADO', 'ROJO/NEGRO'];
    $sizes = ['S', 'M', 'L', 'XL'];
    return [
        'type' => Arr::random($types),
        'size' => Arr::random($sizes),
        'color' => Arr::random($colors),
        'thematic' => $faker->sentence(2),
        'product_id' => $product->id
    ];
});
