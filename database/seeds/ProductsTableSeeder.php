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
        // Plants
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Pflanze ' . $i,
                'slug' => 'plant-' . $i,
                'details' => 'Hier stehen die Details zum Produkt',
                'price' => rand(50, 200),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'image' => 'products/dummy/plant-'.$i.'.jpg',
                'images' => '["products\/dummy\/plant-1.jpg","products\/dummy\/plant-1.jpg","products\/dummy\/plant-1.jpg"]',
            ])->categories()->attach(1);
        }

        // Make Large Plant 1 a Outside as well. Just to test multiple categories
        $product = Product::find(1);
        $product->categories()->attach(4);

        // Select random entries to be featured
        Product::whereIn('id', [1, 4 ,5 , 9])->update(['featured' => true]);
    }
}
