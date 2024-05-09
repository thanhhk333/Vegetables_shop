<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class images extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_images = [
            ['image' => 'product-1.jpg', 'products_id' => '1'],
            ['image' => 'product-2.jpg', 'products_id' => '2'],
            ['image' => 'product-3.jpg', 'products_id' => '3'],
            ['image' => 'product-4.jpg', 'products_id' => '4'],
            ['image' => 'product-5.jpg', 'products_id' => '5'],
            ['image' => 'product-6.jpg', 'products_id' => '6'],
            ['image' => 'product-7.jpg', 'products_id' => '7'],
            ['image' => 'product-8.jpg', 'products_id' => '8'],
        ];
        foreach ($product_images as $img) {
            DB::table('product_images')->insert($img);
        }
    }
}
