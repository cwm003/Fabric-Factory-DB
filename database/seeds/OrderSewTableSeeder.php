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
            'OrderID' => '00001',           
            'OrderSewID' => '00010',
            'patternID'=> '001',
            'PartSew' => 'front and back',
            'EmployeeSewID' => '1234567891',
            'StartDate' => '2017-01-20',
            'EndDate' => '2017-01-25',             
            'Total' => 200          
        ]);
        DB::table('ordersews')->insert([
            'OrderID' => '00002',           
            'OrderSewID' => '00011',
            'patternID'=> '001',
            'PartSew' => 'front and back',
            'EmployeeSewID' => '1234567891',
            'StartDate' => '2017-01-20',
            'EndDate' => '2017-01-25',             
            'Total' => 200
        ]);
        DB::table('ordersews')->insert([
            'OrderID' => '00003',           
            'OrderSewID' => '00012',
            'patternID'=> '001',
            'PartSew' => 'front and back',
            'EmployeeSewID' => '1234567892',
            'StartDate' => '2017-01-20',
            'EndDate' => '2017-01-25',             
            'Total' => 200
         ]);
    }
}