<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HotDeals;
use Carbon\Carbon;
class HotDealsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        HotDeals::insert([
            [
             'id'=>1,
             'name' => 'hot_deals_1',
             'discount' => 0.2,
              'expire_date' => Carbon::today(),
              'expire_time' => Carbon::now(),
            ],
            [
                'id'=>2,
                'name' => 'hot_deals_2',
                'discount' => 0.3,
                'expire_date' => Carbon::today(),
                 'expire_time' => Carbon::now(),
               ],
               [
                'id'=>3,
                'name' => 'hot_deals_3',
                'discount' => 0.4,
                 'expire_date' => Carbon::today(),
                 'expire_time' => Carbon::now(),
               ],
               [
                'id'=>4,
                'name' => 'hot_deals_4',
                'discount' => 0.6,
                'expire_date' => Carbon::today(),
                'expire_time' => Carbon::now(),
               ],
            ]);
    }
}
