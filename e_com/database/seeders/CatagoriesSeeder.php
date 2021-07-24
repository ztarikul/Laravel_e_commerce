<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
class CatagoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::insert([
         [
          'id'=>1,
          'name'=>'Clotheing',
          'created_at'=> now(),

         ],
         [
            'id'=>2,
            'name'=>'Electronics',
            'created_at'=> now(),
  
           ],
           [
            'id'=>3,
            'name'=>'Health & Beauty',
            'created_at'=> now(),
  
           ],
           [
            'id'=>4,
            'name'=>'Watches',
            'created_at'=> now(),
  
           ],
           [
            'id'=>5,
            'name'=>'Jewellery',
            'created_at'=> now(),
  
           ],
           [
            'id'=>6,
            'name'=>'Shoes',
            'created_at'=> now(),
  
           ],
           [
            'id'=>7,
            'name'=>'Accesories',
            'created_at'=> now(),
  
           ],

        ]);
    }
}
