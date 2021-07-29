<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ClothingProductFactory::factory(10)->create();
        ElectronicsProductFactory::factory(10)->create();
        HealthAndBeautyProductFactory::factory(10)->create();
    }
}
