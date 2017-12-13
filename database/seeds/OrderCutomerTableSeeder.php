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
            'idcustomer' => '001',
            'Address'=> '259 m.2 Suthep ChiangMai 50200',
            'Tel' => '0543368955',
            'OrderID' => '00001',
            'Detail' => 'nice and fix',
            'typeproduct' => 'polo',
            'type_cloth'=> 'TC',
            'color_cloth' => '001',
            'size' => 'S', 
            'Total' => 200,
            'Price' => 100,
            'linetotal' => 20000,
            'startdate' => '2017-10-25',
            'dateship' => '2017-11-11',
            'employeeID_recv' => '1004567891'
        ]);
        DB::table('ordercustomers')->insert([
            'Fname' => 'samhee',
            'idcustomer' => '002',
            'Address'=> '259 m.2 Suthep ChiangMai 50200',
            'Tel' => '0543368955',
            'OrderID' => '00002',
            'Detail' => 'nice and fix',
            'typeproduct' => 'polo',
            'type_cloth'=> 'TK',
            'color_cloth' => '002',
            'size' => 'M',
            
            'Total' => 300,
            'Price' => 120,
            'linetotal' => 36000,
            'startdate' => '2017-11-25',
            'dateship' => '2017-12-25',  
            'employeeID_recv' => '1004567890'
        ]);
        DB::table('ordercustomers')->insert([
            'Fname' => 'chanom',
            'idcustomer' => '003',
            'Address'=> '259 m.2 Suthep ChiangMai 50200',
            'Tel' => '0543368955',
            'OrderID' => '00003',
            'Detail' => 'nice and fix',
            'typeproduct' => 'polo',
            'type_cloth'=> 'TC',
            'color_cloth' => '001',
            'size' => 'XL',
            
            'Total' => 200,
            'Price' => 150,
            'linetotal' => 300000,
            'startdate' => '2017-10-25',
            'dateship' => '2017-10-30',
            'employeeID_recv' => '1004567891'
         ]);
         DB::table('ordercustomers')->insert([
            'Fname' => 'kaimok',
            'idcustomer' => '004',
            'Address'=> '259 m.2 Suthep ChiangMai 50200',
            'Tel' => '0543368955',
            'OrderID' => '00004',
            'Detail' => 'nice and fix',
            'typeproduct' => 'polo',
            'type_cloth'=> 'TC',
            'color_cloth' => '001',
            'size' => 'L',
            'Total' => 80,
            'Price' => 140,
            'linetotal' => 11200,
            'startdate' => '2017-12-25',
            'dateship' => '2018-02-14',
            'employeeID_recv' => '1009963889'
         ]);
         DB::table('ordercustomers')->insert([
            'Fname' => 'chanom',
            'idcustomer' => '003',
            'Address'=> '259 m.2 Suthep ChiangMai 50200',
            'Tel' => '0543368955',
            'OrderID' => '00005',
            'Detail' => 'nice and fix',
            'typeproduct' => 'polo',
            'type_cloth'=> 'TC',
            'color_cloth' => '001',
            'size' => 'M',
            
            'Total' => 100,
            'Price' => 120,
            'linetotal' => 12000,
            'startdate' => '2017-09-25',
            'dateship' => '2018-04-13',
            'employeeID_recv' => '1009963889'
         ]);
    }
}