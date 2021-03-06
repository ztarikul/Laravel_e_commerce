<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
         $this->call(CustomersSeeder::class);
         $this->call(CollectionSeeder::class);
         $this->call(HotDealsSeeder::class);
         $this->call(SpecialSeeder::class);
         $this->call(CatagoriesSeeder::class);
         $this->call(SubCategoriesSeeder::class);
         $this->call(SubSubCategoriesSeeder::class);
         $this->call(PostSeeder::class);
         $this->call(CommentSeeder::class);
         //$this->call(ProductSeeder::class);
        
    }
}
