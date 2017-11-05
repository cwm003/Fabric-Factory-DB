<?php

use Illuminate\Database\Seeder;

class MachineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('machines')->insert([
            'departmentID' => '005',
            'machineName' => 'จักรเย็บ',
            'machineID' => 'MC005',
            'factoryID' => 'FT001',
            'purchase_date' => '2017-05-11'
            
        ]);

        DB::table('machines')->insert([
            'departmentID' => '007',
            'machineName' => 'เครื่องปัก' ,
            'machineID' => 'MC007',
            'factoryID' => 'FT001',
            'purchase_date' => '2017-05-11'
            
        ]);
    }
}
