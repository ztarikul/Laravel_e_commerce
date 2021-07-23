<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Collection;
class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Collection::insert([
            [
                'id'=> 1,
                'name' => 'Eid-Ul-Fitr',
                'slug' => 'eid-ul-fitr',
                'created_at'=>now(),
            ],
            [
                'id'=> 2,
                'name' => 'Eid-Ul-Adha',
                'slug' => 'eid-ul-adha',
                'created_at'=>now(),
            ],
            [
                'id'=> 3,
                'name' => 'Puja',
                'slug' => 'puja',
                'created_at'=>now(),
            ],
            [
                'id'=> 4,
                'name' => 'New Year',
                'slug' => 'newyear',
                'created_at'=>now(),
            ],
            [
                'id'=> 5,
                'name' => 'Valentain',
                'slug' => 'valentain',
                'created_at'=>now(),
            ],

            [
                'id'=> 6,
                'name' => 'Noboborsho',
                'slug' => 'noboborsho',
                'created_at'=>now(),
            ],


        ]);
    }
}
