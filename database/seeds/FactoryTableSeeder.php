<?php

use Illuminate\Database\Seeder;

class FactoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('factory')->insert([
            'name_factory' => 'โรงงานผ้าจีน',
            'factory_id' => '1122',
            'tel' => '0256895789',
            'address' => 'Bankok , 10123',
            'account' => '1122334455'
        ]);
        DB::table('factory')->insert([
            'name_factory' => 'โรงงานผ้าญี่ปุ่น',
            'factory_id' => '1133',
            'tel' => '0256895789',
            'address' => 'Ayutthaya , 10111',
            'account' => '1122334466'
        ]);
        DB::table('factory')->insert([
            'name_factory' => 'โรงงานผ้าเกาหลี',
            'factory_id' => '1144',
            'tel' => '0256895789',
            'address' => 'Rayong , 20456',
            'account' => '1122334477'
        ]);
        
    }
}