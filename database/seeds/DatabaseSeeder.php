<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Category;
use App\Product;
use App\Task;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 1)->create();
        factory(Category::class, 20)->create();
        factory(Product::class, 20)->create();
        factory(Task::class, 20)->create();
    }
}
