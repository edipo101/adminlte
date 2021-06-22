<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Category;
use App\Product;
use App\Dvd;
use App\Garment;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        factory(User::class, 1)->create();
        $this->call(CategorySeeder::class);
        factory(Dvd::class, 20)->create();
        factory(Garment::class, 20)->create();
    }
}
