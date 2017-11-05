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
            'orderID' => '00001',
            'patternID'=> '001',
            'typeCloth' => 'TC',
            'OrderCutID' => '00010',
            'numBack' => 100,
            'numFront' => 100,
            'numSleeve' => 200,
            'ColorID' => '001',            
            'total' => 200,           
            'current_complete' => 50,
            'detailscreen' => 'nice and fix'
        ]);
        DB::table('ordercuts')->insert([
            'orderID' => '00002',
            'patternID'=> '001',
            'typeCloth' => 'TC',
            'OrderCutID' => '00011',
            'numBack' => 100,
            'numFront' => 100,
            'numSleeve' => 200,
            'ColorID' => '002',            
            'total' => 200,           
            'current_complete' => 50,
            'detailscreen' => 'nice and fix'
        ]);
        DB::table('ordercuts')->insert([
            'orderID' => '00003',
            'patternID'=> '001',
            'typeCloth' => 'TC',
            'OrderCutID' => '00012',
            'numBack' => 100,
            'numFront' => 100,
            'numSleeve' => 200,
            'ColorID' => '003',            
            'total' => 200,           
            'current_complete' => 50,
            'detailscreen' => 'nice and fix'
         ]);
    }
}