<?php

use Illuminate\Database\Seeder;

class HistoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('historyequipmentmaterialmachine')->insert([
            'order_EQMTMC_ID' => '12345',
            'EQMTMC_ID' => '1122',
            'date' => '2016-12-03',
            'total' => 200,
            'employee_order' => '1234567891'
        ]);
        DB::table('historyequipmentmaterialmachine')->insert([
            'order_EQMTMC_ID' => '12345',
            'EQMTMC_ID' => '1122',
            'date' => '2016-12-03',
            'total' => 80,
            'employee_order' => '1234567891'
        ]);
        DB::table('historyequipmentmaterialmachine')->insert([
            'order_EQMTMC_ID' => '12345',
            'EQMTMC_ID' => '1122',
            'date' => '2016-12-03',
            'total' => 70,
            'employee_order' => '1234567891'
        ]);
        DB::table('historyequipmentmaterialmachine')->insert([
            'order_EQMTMC_ID' => '12345',
            'EQMTMC_ID' => '1122',
            'date' => '2016-12-03',
            'total' => 60,
            'employee_order' => '1234567891'
        ]);
    }
}