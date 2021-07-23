<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SpecialOffer;
use Carbon\Carbon;

class SpecialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SpecialOffer::insert([
            [
             'id'=>1,
             'name' => 'special_offer_1',
             'discount' => 0.2,
              'expire_date' => Carbon::today(),
              'expire_time' => Carbon::now(),
            ],
            [
                'id'=>2,
                'name' => 'special_offer_2',
                'discount' => 0.3,
                'expire_date' => Carbon::today(),
                 'expire_time' => Carbon::now(),
               ],
               [
                'id'=>3,
                'name' => 'special_offer_3',
                'discount' => 0.4,
                 'expire_date' => Carbon::today(),
                 'expire_time' => Carbon::now(),
               ],
               [
                'id'=>4,
                'name' => 'special_offer_4',
                'discount' => 0.6,
                'expire_date' => Carbon::today(),
                'expire_time' => Carbon::now(),
               ],
            ]);
    }
    
}
