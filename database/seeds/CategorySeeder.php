<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
        	'name' => 'DVD',
        	'slug' => 'dvd',
        	'description' => null
        ]);

        Category::create([
        	'name' => 'PRODUCTOS COREANOS',
        	'slug' => 'productos-coreanos',
        	'description' => null
        ]);

        Category::create([
        	'name' => 'PRENDAS',
        	'slug' => 'prendas',
        	'description' => null
        ]);

        Category::create([
        	'name' => 'ARTICULOS',
        	'slug' => 'articulos',
        	'description' => null
        ]);
    }
}
