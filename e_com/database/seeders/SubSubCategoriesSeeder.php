<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubSubCatagory;
class SubSubCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SubSubCatagory::insert([
            [
                'id' => 1,
               'category_id' => 1,
               'sub_category_id' => 1,
               'name' => 'T-Shirts',
               'created_at' => now() 
            ],
            [
                'id' => 2,
               'category_id' => 1,
               'sub_category_id' => 1,
               'name' => 'Dresses',
               'created_at' => now() 
            ],
            [
                'id' => 3,
               'category_id' => 1,
               'sub_category_id' => 1,
               'name' => 'Jeanses',
               'created_at' => now() 
            ],
            [
                'id' => 4,
               'category_id' => 1,
               'sub_category_id' => 1,
               'name' => 'Shirts',
               'created_at' => now() 
            ],
            [
                'id' => 5,
               'category_id' => 1,
               'sub_category_id' => 1,
               'name' => 'Panjabies',
               'created_at' => now() 
            ],
            [
                'id' => 6,
               'category_id' => 1,
               'sub_category_id' => 1,
               'name' => 'Blazers',
               'created_at' => now() 
            ],
            [
                'id' => 7,
               'category_id' => 1,
               'sub_category_id' => 2,
               'name' => 'Dresses',
               'created_at' => now() 
            ],
            [
                'id' => 8,
               'category_id' => 1,
               'sub_category_id' => 2,
               'name' => 'Three-pieces',
               'created_at' => now() 
            ],
            [
                'id' => 9,
               'category_id' => 1,
               'sub_category_id' => 2,
               'name' => 'Sharee',
               'created_at' => now() 
            ],
            [
                'id' => 10,
               'category_id' => 1,
               'sub_category_id' => 2,
               'name' => 'Skirts',
               'created_at' => now() 
            ],
            [
                'id' => 11,
               'category_id' => 1,
               'sub_category_id' => 2,
               'name' => 'Tops',
               'created_at' => now() 
            ],
            [
                'id' => 12,
               'category_id' => 1,
               'sub_category_id' => 3,
               'name' => 'Dresses',
               'created_at' => now() 
            ],
            [
                'id' => 13,
               'category_id' => 1,
               'sub_category_id' => 3,
               'name' => 'Pants',
               'created_at' => now() 
            ],
            [
                'id' => 14,
               'category_id' => 1,
               'sub_category_id' => 4,
               'name' => 'Dresses',
               'created_at' => now() 
            ],
            [
                'id' => 15,
               'category_id' => 1,
               'sub_category_id' => 4,
               'name' => 'Tops',
               'created_at' => now() 
            ],
            [
                'id' => 16,
               'category_id' => 2,
               'sub_category_id' => 5,
               'name' => 'Gaming',
               'created_at' => now() 
            ],
            [
                'id' => 17,
               'category_id' => 2,
               'sub_category_id' => 5,
               'name' => 'Apple',
               'created_at' => now() 
            ],
            [
                'id' => 18,
               'category_id' => 2,
               'sub_category_id' => 6,
               'name' => 'Graphics Cards',
               'created_at' => now() 
            ],
            [
                'id' => 19,
               'category_id' => 2,
               'sub_category_id' => 6,
               'name' => 'Gaming PC',
               'created_at' => now() 
            ],
            [
                'id' => 20,
               'category_id' => 2,
               'sub_category_id' => 7,
               'name' => 'Digitals',
               'created_at' => now() 
            ],
            [
                'id' => 21,
               'category_id' => 2,
               'sub_category_id' => 7,
               'name' => 'Lenses',
               'created_at' => now() 
            ],
            [
                'id' => 22,
               'category_id' => 2,
               'sub_category_id' => 8,
               'name' => 'iPhones',
               'created_at' => now() 
            ],
            [
                'id' => 23,
               'category_id' => 2,
               'sub_category_id' => 8,
               'name' => 'Vivo',
               'created_at' => now() 
            ],
            [
                'id' => 24,
               'category_id' => 3,
               'sub_category_id' => 9,
               'name' => 'Vivo',
               'created_at' => now() 
            ],
            [
                'id' => 25,
               'category_id' => 3,
               'sub_category_id' => 9,
               'name' => 'Vivo',
               'created_at' => now() 
            ],
            [
                'id' => 26,
               'category_id' => 3,
               'sub_category_id' => 10,
               'name' => 'Vivo',
               'created_at' => now() 
            ],
            [
                'id' => 27,
               'category_id' => 3,
               'sub_category_id' => 10,
               'name' => 'Vivo',
               'created_at' => now() 
            ],
            [
                'id' => 28,
               'category_id' => 3,
               'sub_category_id' => 25,
               'name' => 'Vivo',
               'created_at' => now() 
            ],
            [
                'id' => 29,
               'category_id' => 3,
               'sub_category_id' => 25,
               'name' => 'Vivo',
               'created_at' => now() 
            ],
            [
                'id' => 30,
               'category_id' => 3,
               'sub_category_id' => 10,
               'name' => 'Vivo',
               'created_at' => now() 
            ],
            [
                'id' => 31,
               'category_id' => 3,
               'sub_category_id' => 10,
               'name' => 'Vivo',
               'created_at' => now() 
            ],
        ]);
    }
}
