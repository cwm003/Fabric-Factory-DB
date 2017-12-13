<?php

use Illuminate\Database\Seeder;

class OrderCutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ordercuts')->insert([
            'OrderCutID' => '20001',
            'orderID' => '00001',
            'typeCloth' => 'TC',
            'ColorID' => 'สีเขียวทาโร่',
            'EmployeeCutID' => '2004567890',             
            'StartDate' => '2017-10-28',
            'EndDate' => '2017-10-30',  
            'Total' => 100,
            'status' => 0
        ]);
        DB::table('ordercuts')->insert([
            'OrderCutID' => '20002',
            'orderID' => '00002',
            
            'typeCloth' => 'TK',
            'ColorID' => 'สีแดง', 
            'EmployeeCutID' => '2004567890', 
            'StartDate' => '2017-12-01',
            'EndDate' => '2017-12-10', 
            'Total' => 150,
            'status' => 0
        ]);
        DB::table('ordercuts')->insert([
            'OrderCutID' => '20003',
            'orderID' => '00003',
            
            'typeCloth' => 'TC',
            'ColorID' => 'สีดำ',         
            'EmployeeCutID' => '2004567890',                   
            'StartDate' => '2017-10-27',
            'EndDate' => '2017-10-28', 
            'Total' => 100, 
            'status' => 0
         ]);
         DB::table('ordercuts')->insert([
            'OrderCutID' => '20004',
            'orderID' => '00004',
            'typeCloth' => 'TC',
            'ColorID' => 'สีม่วงมะปราง',         
            'EmployeeCutID' => '2004567890',                   
            'StartDate' => '2018-01-10',
            'EndDate' => '2018-02-01', 
            'Total' => 80, 
            'status' => 1
         ]);
         DB::table('ordercuts')->insert([
            'OrderCutID' => '20005',
            'orderID' => '00005',
            'typeCloth' => 'TC',
            'ColorID' => 'สีขาวจั๊ว',         
            'EmployeeCutID' => '2004567890',                   
            'StartDate' => '2018-01-31',
            'EndDate' => '2018-02-28', 
            'Total' => 80, 
            'status' => 0
         ]);
    }
}