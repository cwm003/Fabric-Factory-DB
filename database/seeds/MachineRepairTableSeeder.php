<?php

use Illuminate\Database\Seeder;

class MachineRepairTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('machinerepair')->insert([
            'machineID' => 'MC001',
            'machineName' => 'จักรเย็บ' ,
            'DateRepair' => '2017-08-14',
            'ExpenseRepair' => 15000, 
        ]);

        DB::table('machinerepair')->insert([
            'machineID' => 'MC002',
            'machineName' => 'เครื่องปัก' ,
            'DateRepair' => '2017-08-14',
            'ExpenseRepair' => 50000,   
        ]);
    }
}
