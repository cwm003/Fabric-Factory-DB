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
        DB::table('department')->insert([
            'departmentname' => 'แผนกเย็บ',
            'departmentID' => '005',
            'supervisor' => '1234567891'
        ]); 
        DB::table('department')->insert([
            'departmentname' => 'แผนกตัด',
            'departmentID' => '006',
            'supervisor' => '1234567892'
        ]); 
        DB::table('department')->insert([
            'departmentname' => 'แผนกปัก/สกรีน',
            'departmentID' => '007',
            'supervisor' => '1234567893'
        ]); 
        DB::table('department')->insert([
            'departmentname' => 'แผนกแพค',
            'departmentID' => '008',
            'supervisor' => '1234567894'
        ]);
        DB::table('department')->insert([
            'departmentname' => 'แผนกซ่อมบำรุง',
            'departmentID' => '009',
            'supervisor' => '1234567895'
        ]);
        DB::table('department')->insert([
            'departmentname' => 'แผนกขนส่ง',
            'departmentID' => '010',
            'supervisor' => '1234567896'
        ]);  
    }
}