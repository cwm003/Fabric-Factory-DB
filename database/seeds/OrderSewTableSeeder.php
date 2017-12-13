<?php

use Illuminate\Database\Seeder;

class OrderSewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ordersews')->insert([  
            'OrderSewID' => '30001', 
            'OrderID' => '00001',           
            'EmployeeSewID' => '3004567891',
            'StartDate' => '2017-10-30',
            'EndDate' => '2017-11-10', 
            'Total' =>   200,
            'status' => 0         
        ]);
        DB::table('ordersews')->insert([
            'OrderSewID' => '30002',
            'OrderID' => '00002',             
            'EmployeeSewID' => '3004567891',
            'StartDate' => '2017-12-11',
            'EndDate' => '2017-12-24', 
            'Total' =>   300,
            'status' => 0
        ]);
        DB::table('ordersews')->insert([
            'OrderSewID' => '30003',
            'OrderID' => '00003',           
            'EmployeeSewID' => '3004567891',
            'StartDate' => '2017-10-29',
            'EndDate' => '2017-10-30', 

            'Total' => 100,
            'status' => 0
         ]);
         DB::table('ordersews')->insert([
            'OrderSewID' => '30004',
            'OrderID' => '00004',           
            'EmployeeSewID' => '3004567891',
            'StartDate' => '2017-10-29',
            'EndDate' => '2017-10-30', 
            'Total' => 100,
            'status' => 0
         ]);
         DB::table('ordersews')->insert([
            'OrderSewID' => '30005',
            'OrderID' => '00005',           
            'EmployeeSewID' => '3004567891',
            'StartDate' => '2018-02-28',
            'EndDate' => '2018-03-12', 
            'Total' => 80,
            'status' => 0
         ]);
    }
}