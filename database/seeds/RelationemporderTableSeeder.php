<?php

use Illuminate\Database\Seeder;

class RelationemporderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('emporders')->insert([
            'employeeID' => '1004567891',
            'OrderID' => '00001'
        ]);
        DB::table('emporders')->insert([
            'employeeID' => '1004567890',
            'OrderID' => '00002'
        ]);
        DB::table('emporders')->insert([
            'employeeID' => '1004567891',
            'OrderID' => '00003'
        ]);


    }

}