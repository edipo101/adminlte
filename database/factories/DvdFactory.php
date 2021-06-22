<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Dvd;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Dvd::class, function (Faker $faker) {
	$number_discs = rand(1, 3);
	$purchase_price = $number_discs * 3;
    $sale_price = $number_discs * 5;
    $product = Product::create([
    	'purchase_price' => $purchase_price,
    	'sale_price' => $sale_price,
    	'utility' => $sale_price - $purchase_price,
        'category_id' => 1
    ]);

    $title = $faker->sentence(3);
    $genders = ['COMEDIA', 'ACCION', 'GORE', 'ECCHI', 'DEPORTE'];
    $languages = ['ESPAÑOL', 'JAPONÉS', 'LATINO'];
    return [
        'category_id' => 1,
        'type_id' => rand(1, 10),
        'title' => $title,
        'slug' => Str::slug($title),
        'gender' => Arr::random($genders),
        'language' => Arr::random($languages),
        'number_discs' => $number_discs,
        'product_id' => $product->id
    ];
});
