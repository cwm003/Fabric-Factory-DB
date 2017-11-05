<?php

use Illuminate\Database\Seeder;

class VehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicle')->insert([
            'PurchaseDate' => '2008-08-08',
            'color' => 'red',
            'generation' => 'D-max',
            'brand' => 'Isuzu',  
            'LicensePlate' => 'กข-9999',  
            'VehicleID' => '010',  
            'employeeID' => '1234567896'
        ]);
        DB::table('vehicle')->insert([
            'PurchaseDate' => '2010-05-30',
            'color' => 'red',
            'generation' => 'Mercedes',
            'brand' => 'Benz',  
            'LicensePlate' => 'ฟม-9555',  
            'VehicleID' => '020',  
            'employeeID' => '1234567897'
        ]);
    }
}