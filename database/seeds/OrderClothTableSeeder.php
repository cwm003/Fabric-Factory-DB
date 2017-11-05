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
        DB::table('ordercloth')->insert([
            'namefactory' => 'โรงงานผ้าจีน',
            'factory_id' => '1122',
            'tel_factory' => '0256895789',
            'address_factory' => 'Bankok , 10123',
            'startorder' => '2017-10-11',
            'weight_cloth' => 60.17,
            'account_factory' => '1122334455',
            'date_tranfer' => '2017-10-25',
            'linetotal' => 1200,
            'type_cloth' => 'TC',
            'date_recv' => '2017-10-27',
            'cloth_id' => '2001',
            'width_cloth' => 60,
            'folding' => 3,
            'unit_folding' => 400,
            'order_clothid' => '00001',
        ]);
        DB::table('ordercloth')->insert([
            'namefactory' => 'โรงงานผ้าจีน',
            'factory_id' => '1122',
            'tel_factory' => '0256895789',
            'address_factory' => 'Bankok , 10123',
            'startorder' => '2017-11-11',
            'weight_cloth' => 60,
            'account_factory' => '1122334455',
            'date_tranfer' => '2017-11-25',
            'linetotal' => 1000,
            'type_cloth' => 'TK',
            'date_recv' => '2017-11-27',
            'cloth_id' => '2002',
            'width_cloth' => 30,
            'folding' => 5,
            'unit_folding' => 200,
            'order_clothid' => '00002',
        ]);
    }
}