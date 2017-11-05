<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([
            'nameCus' => 'fammie',
            'customerID' => '624',
            'Address' => '259 m.2 Suthep ChiangMai 50200',
            'tel' => '0543368955'
        ]);
        DB::table('customer')->insert([
            'nameCus' => 'samhee',
            'customerID' => '789',
            'Address' => '259 m.2 Suthep ChiangMai 50200',
            'tel' => '0543368955'
        ]);
        DB::table('customer')->insert([
            'nameCus' => 'chanom',
            'customerID' => '101',
            'Address' => '259 m.2 Suthep ChiangMai 50200',
            'tel' => '0543368955'
        ]);
        DB::table('customer')->insert([
            'nameCus' => 'kaimok',
            'customerID' => '555',
            'Address' => '259 m.2 Suthep ChiangMai 50200',
            'tel' => '0543368955'
        ]);
        DB::table('customer')->insert([
            'nameCus' => 'nongyai',
            'customerID' => '666',
            'Address' => '259 m.2 Suthep ChiangMai 50200',
            'tel' => '0543368955'
        ]);
        DB::table('customer')->insert([
            'nameCus' => 'nongkai',
            'customerID' => '777',
            'Address' => '259 m.2 Suthep ChiangMai 50200',
            'tel' => '0543368955'
        ]);
    }
}
