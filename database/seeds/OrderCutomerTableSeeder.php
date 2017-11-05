<?php

use Illuminate\Database\Seeder;

class OrderCutomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ordercustomers')->insert([
            'Fname' => 'fammie',
            'idcustomer' => '624',
            'OrderID' => '00001',
            'Detail' => 'nice and fix',
            'Total' => 200,
            'Price' => 100,
            'linetotal' => 20000,
            'startdate' => '2017-10-25',
            'dateship' => '2017-11-25',
            'typeproduct' => 'polo',
            'color_cloth' => '001',
            'employeeID_recv' => '1234567891',
            'size' => 'S,M,L,XL',           
            'Tel' => '0543368955',
        ]);
        DB::table('ordercustomers')->insert([
            'Fname' => 'samhee',
            'idcustomer' => '789',
            'OrderID' => '00002',
            'Detail' => 'nice and fix',
            'Total' => 300,
            'Price' => 100,
            'linetotal' => 30000,
            'startdate' => '2017-11-25',
            'dateship' => '2017-12-25',
            'typeproduct' => 'polo',
            'color_cloth' => '002',
            'employeeID_recv' => '1234567892',
            'size' => 'S,M,L,XL',           
            'Tel' => '0543368955',
        ]);
        DB::table('ordercustomers')->insert([
            'Fname' => 'chanom',
            'idcustomer' => '101',
            'OrderID' => '00003',
            'Detail' => 'nice and fix',
            'Total' => 100,
            'Price' => 150,
            'linetotal' => 15000,
            'startdate' => '2017-10-25',
            'dateship' => '2017-10-20',
            'typeproduct' => 'polo',
            'color_cloth' => '001',
            'employeeID_recv' => '1234567893',
            'size' => 'S,M,L,XL',      
            'Tel' => '0543368955'
         ]);
    }
}