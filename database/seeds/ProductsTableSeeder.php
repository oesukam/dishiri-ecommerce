<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Men clothes
        for ($i=1; $i <= 10; $i++) {
            Product::create([
                'name' => 'Men Shirt '.$i,
                'slug' => 'men-shirt-'.$i,
                'details' => [13,14,15][array_rand([13,14,15])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] .'',
                'price' => rand(1499, 9499),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' => 'men-clothes/'.$i.'.jpg',
                // 'image' => 'products/dummy/desktop-'.$i.'.jpg',                
                'images' => '["products\/dummy\/men-clothes\/' . $i . '.jpg", "men-clothes\/' . $i . '.jpg"]',  
                // 'images' => '["products\/dummy\/laptop-2.jpg"]', 
                // 'images' => '["products\/dummy\/laptop-"' . 2 .  '".jpg"]',                             
            ])->categories()->attach(1);
        }

        // Woem clothes
        for ($i=1; $i <= 10; $i++) {
            Product::create([
                'name' => 'Women Shirt '.$i,
                'slug' => 'women-shirt-'.$i,
                'details' => [13,14,15][array_rand([13,14,15])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] .'',
                'price' => rand(1499, 9499),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' => 'women-clothes/'.$i.'.jpg',
                // 'image' => 'products/dummy/desktop-'.$i.'.jpg',                
                'images' => '["products\/dummy\/women-clothes\/' . $i . '.jpg", "women-clothes\/' . $i . '.jpg"]',
            ])->categories()->attach(2);
        }


        // Select random entries to be featured
        Product::whereIn('id', [1, 5, 12, 22])->update(['featured' => true]);
    }
}
