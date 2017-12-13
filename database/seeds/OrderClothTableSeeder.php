<?php

use Illuminate\Database\Seeder;

class OrderClothTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ordercloths')->insert([
            'order_clothid' => '10001',
            'OrderID' => '00001',
            'factory_id' => '1122',
            'startorder' => '2017-10-25',
            'type_cloth' => 'TC',
            'color_cloth' => '001',
            'width_cloth' => 60,
            'weight_cloth' => 60.17,
            'folding' => 3,
            'unit_folding' => 400,
            'Total' => 200,
            'linetotal' => 1200,
            'date_tranfer' => '2017-10-26',
            'date_recv' => '2017-10-27',
            'status' => 0
        ]);
        DB::table('ordercloths')->insert([
            'order_clothid' => '10002',
            'OrderID' => '00002',
            'factory_id' => '1144',
            'startorder' => '2017-11-25',
            'type_cloth' => 'TK',
            'color_cloth' => '002',
            'width_cloth' => 30,
            'weight_cloth' => 60,
            'folding' => 5,
            'unit_folding' => 200,
            'Total' => 300,
            'linetotal' => 1000,
            'date_tranfer' => '2017-11-26',
            'date_recv' => '2017-11-30',
            'status' => 0
        ]);
        DB::table('ordercloths')->insert([
            'order_clothid' => '10003',
            'OrderID' => '00003',
            'factory_id' => '1155',
            'startorder' => '2017-10-25',
            'type_cloth' => 'TC',
            'color_cloth' => '001',
            'width_cloth' => 30,
            'weight_cloth' => 60,
            'folding' => 2,
            'unit_folding' => 400,
            'Total' => 100,
            'linetotal' => 800,
            'date_tranfer' => '2017-10-27',
            'date_recv' => '2017-10-27',
            'status' => 0
        ]);
        DB::table('ordercloths')->insert([
            'order_clothid' => '10004',
            'OrderID' => '00004',
            'factory_id' => '1144',
            'startorder' => '2017-12-25',
            'type_cloth' => 'TC',
            'color_cloth' => '001',
            'width_cloth' => 30,
            'weight_cloth' => 60,
            'folding' => 2,
            'unit_folding' => 400,
            'Total' => 80,
            'linetotal' => 800,
            'date_tranfer' => '2017-12-27',
            'date_recv' => '2018-01-09',
            'status' => 1
        ]);
        DB::table('ordercloths')->insert([
            'order_clothid' => '10005',
            'OrderID' => '00005',
            'factory_id' => '1133',
            'startorder' => '2017-09-25',
            'type_cloth' => 'TC',
            'color_cloth' => '001',
            'width_cloth' => 30,
            'weight_cloth' => 60,
            'folding' => 2,
            'unit_folding' => 400,
            'Total' => 100,
            'linetotal' => 800,
            'date_tranfer' => '2018-01-27',
            'date_recv' => '2018-01-30',
            'status' => 0
        ]);
    }
}