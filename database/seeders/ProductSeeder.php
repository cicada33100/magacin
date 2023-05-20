<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   
    public function run(): void
    {
        $products = [
            [
                "categories_id" => 1,
                "name" => "iPhone 13",
                "quantity" => 5,
                "price" => 1099,
                "description" => "The latest iPhone with advanced features.",
            ],
            [
                "categories_id" => 2,
                "name" => "Samsung Galaxy S21",
                "quantity" => 3,
                "price" => 899,
                "description" => "Powerful Android smartphone with an amazing display.",
            ],
            [
                "categories_id" => 5,
                "name" => "Sony PlayStation 5",
                "quantity" => 8,
                "price" => 499,
                "description" => "Next-gen gaming console with stunning graphics.",
            ],
            [
                "categories_id" => 3,
                "name" => "Canon EOS R5",
                "quantity" => 2,
                "price" => 3899,
                "description" => "Professional mirrorless camera for high-quality photography.",
            ],
            [
                "categories_id" => 4,
                "name" => "Apple MacBook Pro",
                "quantity" => 10,
                "price" => 1999,
                "description" => "Powerful laptop for creative professionals.",
            ],
            [
                "categories_id" => 1,
                "name" => "DJI Mavic Air 2",
                "quantity" => 6,
                "price" => 799,
                "description" => "Compact drone with advanced camera capabilities.",
            ],
            [
                "categories_id" => 1,
                "name" => "Bose QuietComfort 35 II",
                "quantity" => 4,
                "price" => 299,
                "description" => "Premium noise-canceling headphones for immersive audio experience.",
            ],
            [
                "categories_id" => 1,
                "name" => "Samsung QLED Q80T",
                "quantity" => 7,
                "price" => 1599,
                "description" => "High-performance 4K TV with vibrant colors and impressive clarity.",
            ],
            [
                "categories_id" => 5,
                "name" => "Nintendo Switch",
                "quantity" => 9,
                "price" => 299,
                "description" => "Versatile gaming console for playing at home or on the go.",
            ],
            [
                "categories_id" => 2,
                "name" => "Fitbit Charge 4",
                "quantity" => 1,
                "price" => 129,
                "description" => "Fitness tracker with built-in GPS and heart rate monitoring.",
            ]
        ];
        DB::table('products')->delete();
        DB::table('products')->insert($products);
        
        

    }
}
