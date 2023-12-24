<?php

namespace Database\Seeders;

use App\Models\Gold;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $goldData = [
            ['type'=>'21','inventory_type'=>'internal','weight'=>200],
            ['type'=>'21','inventory_type'=>'external','weight'=>100],
            ['type'=>'18','inventory_type'=>'internal','weight'=>200],
            ['type'=>'18','inventory_type'=>'external','weight'=>100],

        ];

        Gold::insert($goldData);
    }
}
