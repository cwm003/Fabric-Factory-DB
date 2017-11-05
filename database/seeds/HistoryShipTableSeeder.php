<?php

use Illuminate\Database\Seeder;

class HistoryShipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('historyshipment')->insert([
            'date' => '2015-02-03',
            'employeeID' => '1234567897',
            'OrderID' => '00001',
            'linetotal' => 28000,
            'VehicleID' => '010' 
        ]);
    }
}