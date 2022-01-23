<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::insert(
            [
                [
                    'name' => 'Mirpur',
                    'code' =>  '1',
                ],
                [
                    'name' => 'Rampura',
                    'code' =>  '2',
                ],[
                    'name' => 'Bonoshri',
                    'code' =>  '3',
                ],[
                    'name' => 'Boshundhora',
                    'code' =>  '4',
                ],[
                    'name' => 'Gulsan',
                    'code' =>  '5',
                ],[
                    'name' => 'Bonani',
                    'code' =>  '6',
                ],[
                    'name' => 'MohaKhali',
                    'code' =>  '7',
                ],[
                    'name' => 'Framget',
                    'code' =>  '8',
                ],[
                    'name' => 'Jigatola',
                    'code' =>  '9',
                ],[
                    'name' => 'NewMarket',
                    'code' =>  '10',
                ],
            ]
        );


    }
}
