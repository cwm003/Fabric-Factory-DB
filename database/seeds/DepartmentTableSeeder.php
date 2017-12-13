<?php

use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'departmentname' => 'CEO',
            'departmentID' => '999',
            'supervisor' => '9999999999'
        ]);
        DB::table('departments')->insert([
            'departmentname' => 'แผนกสั่งผ้า',
            'departmentID' => '001',
            'supervisor' => '0014567896'
        ]);  
        DB::table('departments')->insert([
            'departmentname' => 'แผนกเย็บ',
            'departmentID' => '300',
            'supervisor' => '3004567891'
        ]); 
        DB::table('departments')->insert([
            'departmentname' => 'แผนกตัด',
            'departmentID' => '200',
            'supervisor' => '2004567892'
        ]); 
        DB::table('departments')->insert([
            'departmentname' => 'แผนกรับออร์เดอร์',
            'departmentID' => '100',
            'supervisor' => '1004567890'
        ]);  
    }
}