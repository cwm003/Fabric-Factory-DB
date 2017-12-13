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
        DB::table('customers')->insert([
            'nameCus' => 'fammie',
            'customerID' => '001',
            'Address' => '259 m.2 Suthep ChiangMai 50200',
            'tel' => '0543368955'
        ]);
        DB::table('customers')->insert([
            'nameCus' => 'samhee',
            'customerID' => '002',
            'Address' => '259 m.2 Suthep ChiangMai 50200',
            'tel' => '0543368955'
        ]);
        DB::table('customers')->insert([
            'nameCus' => 'chanom',
            'customerID' => '003',
            'Address' => '259 m.2 Suthep ChiangMai 50200',
            'tel' => '0543368955'
        ]);
        DB::table('customers')->insert([
            'nameCus' => 'kaimok',
            'customerID' => '004',
            'Address' => '259 m.2 Suthep ChiangMai 50200',
            'tel' => '0543368955'
        ]);
        DB::table('customers')->insert([
            'nameCus' => 'nongyai',
            'customerID' => '005',
            'Address' => '259 m.2 Suthep ChiangMai 50200',
            'tel' => '0543368955'
        ]);
        DB::table('customers')->insert([
            'nameCus' => 'nongkai',
            'customerID' => '006',
            'Address' => '259 m.2 Suthep ChiangMai 50200',
            'tel' => '0543368955'
        ]);
        DB::table('customers')->insert([
            'nameCus' => 'yuta',
            'customerID' => '007',
            'Address' => '259 m.2 Suthep ChiangMai 50200',
            'tel' => '0543368955'
        ]);
        DB::table('customers')->insert([
            'nameCus' => 'jedsada',
            'customerID' => '008',
            'Address' => '259 m.2 Suthep ChiangMai 50200',
            'tel' => '0543368955'
        ]);
        DB::table('customers')->insert([
            'nameCus' => 'donlapat',
            'customerID' => '009',
            'Address' => '259 m.2 Suthep ChiangMai 50200',
            'tel' => '0543368955'
        ]);
        DB::table('customers')->insert([
            'nameCus' => 'mark',
            'customerID' => '010',
            'Address' => '259 m.2 Suthep ChiangMai 50200',
            'tel' => '0543368955'
        ]);

        
    }
}
