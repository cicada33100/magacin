<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Electronics',
                'description' => 'Category for electronic devices.'
            ],
            [
                'name' => 'Smartphones',
                'description' => 'Category for smartphones and mobile devices.'
            ],
            [
                'name' => 'Cameras',
                'description' => 'Category for cameras and photography equipment.'
            ],
            [
                'name' => 'Computers',
                'description' => 'Category for computer hardware and accessories.'
            ],
            [
                'name' => 'Gaming',
                'description' => 'Category for gaming consoles and accessories.'
            ]
            ];
            DB::table('categories')->delete();
            DB::table('categories')->insert($categories);
    
        }
}
