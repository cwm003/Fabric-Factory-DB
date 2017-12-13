<?php

use Illuminate\Database\Seeder;

class OrderclothofFactorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orderclothoffactors')->insert([
            'factory_id' => '1122',
            'OrderID' => '00001'
        ]);
        DB::table('orderclothoffactors')->insert([
            'factory_id' => '1144',
            'OrderID' => '00002'
        ]);
        DB::table('orderclothoffactors')->insert([
            'factory_id' => '1155',
            'OrderID' => '00003'
        ]);
        DB::table('orderclothoffactors')->insert([
            'factory_id' => '1144',
            'OrderID' => '00004'
        ]);
        DB::table('orderclothoffactors')->insert([
            'factory_id' => '1133',
            'OrderID' => '00005'
        ]);


    }

}