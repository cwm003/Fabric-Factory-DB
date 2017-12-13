<?php

use Illuminate\Database\Seeder;

class OrderofcustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orderofcustomers')->insert([
            'OrderID' => '00001',
            'customerID' => '001'
        ]);

        DB::table('orderofcustomers')->insert([
            'OrderID' => '00002',
            'customerID' => '002'
        ]);
        
        DB::table('orderofcustomers')->insert([
            'OrderID' => '00003',
            'customerID' => '003'
        ]);
        DB::table('orderofcustomers')->insert([
            'OrderID' => '00004',
            'customerID' => '004'
        ]);
        DB::table('orderofcustomers')->insert([
            'OrderID' => '00005',
            'customerID' => '003'
        ]);
    }
}
