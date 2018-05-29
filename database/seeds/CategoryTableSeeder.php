<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Men Clothes', 'slug' => 'men-clothes', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Women Clothes', 'slug' => 'women-clothes', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mixed Clothes', 'slug' => 'mixed-clothes', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Men Shoes', 'slug' => 'men-shoes', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Women Shoes', 'slug' => 'women-shoes', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
