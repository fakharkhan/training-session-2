<?php

use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \App\City::insert([
//            ['name'=>'Lahore'],
//            ['name'=>'Karachi'],
//            ['name'=>'Islamabad'],
//            ['name'=>'Peshawar'],
//
//        ]);

        $cities = [
            ['name'=>'Lahore'],
            ['name'=>'Karachi'],
            ['name'=>'Islamabad'],
            ['name'=>'Peshawar'],
        ];

        foreach ($cities as $city)
        {
            \App\City::create($city);
        }

    }
}
