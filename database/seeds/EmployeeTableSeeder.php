<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'employeeID' => '1234567891',
            'Fname' => 'งามสิริ',
            'Lname' => 'บัวมั่น',
            'Ssn' => '1102002741786',
            'departmentID' => '005',
            'age' => 15,
            'hire_date' => '2017-05-11',
            'address' => '548 m.9 NewYork City USA',
            'gender' => 'female',
            'salary' => 100000,
            'position' => 'Supervisor'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '1234567892',
            'Fname' => 'สมหมาย',
            'Lname' => 'ยศ',
            'Ssn' => '1102002741786',
            'departmentID' => '006',
            'age' => 15,
            'hire_date' => '2017-05-11',
            'address' => '548 m.9 London US',
            'gender' => 'male',
            'salary' => 50000,
            'position' => 'Supervisor'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '1234567893',
            'Fname' => 'หยก',
            'Lname' => 'หยวก',
            'Ssn' => '1102002741787',
            'departmentID' => '007',
            'age' => 15,
            'hire_date' => '2017-05-11',
            'address' => '548 m.9 Laos',
            'gender' => 'female',
            'salary' => 10000,
            'position' => 'Supervisor'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '1234567894',
            'Fname' => 'แชมป์',
            'Lname' => 'เพลิน',
            'Ssn' => '1102002741787',
            'departmentID' => '008',
            'age' => 15,
            'hire_date' => '2017-05-11',
            'address' => '548 m.9 Malaysia',
            'gender' => 'male',
            'salary' => 900000000,
            'position' => 'Supervisor'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '1234567895',
            'Fname' => 'เมย์',
            'Lname' => 'นินิ',
            'Ssn' => '1102002741787',
            'departmentID' => '009',
            'age' => 15,
            'hire_date' => '2017-05-11',
            'address' => '548 m.9 Chaina',
            'gender' => 'female',
            'salary' => 50000,
            'position' => 'Supervisor'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '1234567896',
            'Fname' => 'สมาย',
            'Lname' => 'ขนมจีบ',
            'Ssn' => '1102002741789',
            'departmentID' => '010',
            'age' => 15,
            'hire_date' => '2017-05-11',
            'address' => '548 m.9 India',
            'gender' => 'female',
            'salary' => 10,
            'position' => 'Supervisor'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '1234567897',
            'Fname' => 'อิก',
            'Lname' => 'ศอกชมพู',
            'Ssn' => '1102002741790',
            'departmentID' => '010',
            'age' => 15,
            'hire_date' => '2017-05-12',
            'address' => '548 m.9 Japan',
            'gender' => 'male',
            'salary' => 100,
            'position' => 'Employee'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '1234567898',
            'Fname' => 'โอปอ',
            'Lname' => 'ฝายหิน',
            'Ssn' => '1102002741789',
            'departmentID' => '009',
            'age' => 15,
            'hire_date' => '2017-06-11',
            'address' => '548 m.9 Thai',
            'gender' => 'male',
            'salary' => 1000,
            'position' => 'Employee'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '1234567899',
            'Fname' => 'บูม',
            'Lname' => 'ฝาแฝด',
            'Ssn' => '1102002741789',
            'departmentID' => '008',
            'age' => 15,
            'hire_date' => '2017-06-11',
            'address' => '548 m.9 Philipin',
            'gender' => 'male',
            'salary' => 1000,
            'position' => 'Employee'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '1234567890',
            'Fname' => 'ขนุน',
            'Lname' => 'เล่นไวโอลิน',
            'Ssn' => '1102002741780',
            'departmentID' => '007',
            'age' => 15,
            'hire_date' => '2017-06-11',
            'address' => '548 m.9 Thai',
            'gender' => 'male',
            'salary' => 1000,
            'position' => 'Employee'
        ]);
    }
}