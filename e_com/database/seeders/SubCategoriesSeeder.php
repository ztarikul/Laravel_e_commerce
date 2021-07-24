<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class SubCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SubCategory::insert([
            [
                'id' => 1,
               'category_id' => 1,
               'name' => 'Men',
               'created_at' => now() 
            ],
            [
                'id' => 2,
               'category_id' => 1,
               'name' => 'Women',
               'created_at' => now() 
            ],
            [
                'id' => 3,
               'category_id' => 1,
               'name' => 'Boys',
               'created_at' => now() 
            ],
            [
                'id' => 4,
               'category_id' => 1,
               'name' => 'Girls',
               'created_at' => now() 
            ],
            [
                'id' => 5,
               'category_id' => 2,
               'name' => 'Laptops',
               'created_at' => now() 
            ],
            [
                'id' => 6,
               'category_id' => 2,
               'name' => 'Desktops',
               'created_at' => now() 
            ],
            [
                'id' => 7,
               'category_id' => 2,
               'name' => 'Cameras',
               'created_at' => now() 
            ],
            [
                'id' => 8,
               'category_id' => 2,
               'name' => 'Mobile Phones',
               'created_at' => now() 
            ],
            [
                'id' => 9,
               'category_id' => 3,
               'name' => 'Health Care',
               'created_at' => now() 
            ],
            [
                'id' => 10,
               'category_id' => 3,
               'name' => 'Body Care',
               'created_at' => now() 
            ],
            [
                'id' => 11,
               'category_id' => 4,
               'name' => 'Men Watches',
               'created_at' => now() 
            ],
            [
                'id' => 12,
               'category_id' => 4,
               'name' => 'Men Formal Watches',
               'created_at' => now() 
            ],
            [
                'id' => 13,
               'category_id' => 4,
               'name' => 'Ladies Watches',
               'created_at' => now() 
            ],
            [
                'id' => 14,
               'category_id' => 4,
               'name' => 'Smart Watches',
               'created_at' => now() 
            ],
            [
                'id' => 15,
               'category_id' => 4,
               'name' => 'Wedding Watches',
               'created_at' => now() 
            ],
            [
                'id' => 16,
               'category_id' => 4,
               'name' => 'Pair Watches',
               'created_at' => now() 
            ],
            [
                'id' => 17,
               'category_id' => 5,
               'name' => 'Bridal Collections',
               'created_at' => now() 
            ],
            [
                'id' => 18,
               'category_id' => 5,
               'name' => 'Diamond',
               'created_at' => now() 
            ],
            [
                'id' => 19,
               'category_id' => 5,
               'name' => 'Gold',
               'created_at' => now() 
            ],
            [
                'id' => 20,
               'category_id' => 5,
               'name' => 'Imitation',
               'created_at' => now() 
            ],
            [
                'id' => 21,
               'category_id' => 5,
               'name' => 'Glod Plate',
               'created_at' => now() 
            ],
            [
                'id' => 22,
               'category_id' => 6,
               'name' => 'Men',
               'created_at' => now() 
            ],
            [
                'id' => 23,
               'category_id' => 6,
               'name' => 'Women',
               'created_at' => now() 
            ],
            [
                'id' => 24,
               'category_id' => 6,
               'name' => 'Kids',
               'created_at' => now() 
            ],
            [
                'id' => 25,
               'category_id' => 3,
               'name' => 'Face Care',
               'created_at' => now() 
            ],
            [
                'id' => 26,
               'category_id' => 3,
               'name' => 'Hair Care',
               'created_at' => now() 
            ],
            
            [
                'id' => 27,
               'category_id' => 7,
               'name' => 'Wallet',
               'created_at' => now() 
            ],
            [
                'id' => 28,
               'category_id' => 7,
               'name' => 'Bag',
               'created_at' => now() 
            ],
            [
                'id' => 29,
               'category_id' => 7,
               'name' => 'Belt',
               'created_at' => now() 
            ],


         
            
        ]);
    }
}
