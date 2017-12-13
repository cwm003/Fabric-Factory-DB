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
            'employeeID' => '3004567891',
            'Fname' => 'งามสิริ',
            'Lname' => 'บัวมั่น',
            'Ssn' => '1102002741786',
            'departmentID' => '300',
            'age' => 15,
            'hire_date' => '2017-05-11',
            'tel' => '0826037444',
            'address' => '548 m.9 NewYork City USA',
            'gender' => 'female',
            'salary' => 100000,
            'position' => 'Supervisor',
            'password' => '12345678'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '2004567892',
            'Fname' => 'สมหมาย',
            'Lname' => 'ยศ',
            'Ssn' => '1102002741786',
            'departmentID' => '200',
            'age' => 15,
            'hire_date' => '2017-05-11',
            'tel' => '0826037444',
            'address' => '548 m.9 London US',
            'gender' => 'male',
            'salary' => 50000,
            'position' => 'Supervisor',
            'password' => '12345678'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '2004567890',
            'Fname' => 'สมหมาย',
            'Lname' => 'จ้า',
            'Ssn' => '1102102741786',
            'departmentID' => '200',
            'age' => 15,
            'hire_date' => '2017-05-11',
            'tel' => '0826037444',
            'address' => '548 m.9 London US',
            'gender' => 'female',
            'salary' => 50000,
            'position' => 'Employee',
            'password' => '12345678'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '2004567893',
            'Fname' => 'หยก',
            'Lname' => 'หยวก',
            'Ssn' => '1102002741787',
            'departmentID' => '200',
            'age' => 15,
            'hire_date' => '2017-05-11',
            'tel' => '0826037444',
            'address' => '548 m.9 Laos',
            'gender' => 'female',
            'salary' => 10000,
            'position' => 'Employee',
            'password' => '12345678'
        ]);
        DB::table('employees')->insert([  //ceo
            'employeeID' => '9999999999',
            'Fname' => 'ชัดเจน',
            'Lname' => 'แจ่มแจ้ง',
            'Ssn' => '1102002741787',
            'departmentID' => '999',
            'age' => 15,
            'hire_date' => '2017-05-11',
            'tel' => '0826037444',
            'address' => '548 m.9 Malaysia',
            'gender' => 'male',
            'salary' => 900000000,
            'position' => 'Supervisor',
            'password' => '12345678'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '3004567895',
            'Fname' => 'น้อง',
            'Lname' => 'สมย',
            'Ssn' => '1102112741787',
            'departmentID' => '300',
            'age' => 15,
            'hire_date' => '2017-05-11',
            'tel' => '0826037444',
            'address' => '548 m.9 Chaina',
            'gender' => 'female',
            'salary' => 50000,
            'position' => 'Employee',
            'password' => '12345678'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '3004567896',
            'Fname' => 'สมายจ้า',
            'Lname' => 'จ้าจ้า',
            'Ssn' => '1102002741789',
            'departmentID' => '300',
            'age' => 15,
            'hire_date' => '2017-05-11',
            'tel' => '0826037444',
            'address' => '548 m.9 India',
            'gender' => 'female',
            'salary' => 10,
            'position' => 'Employee',
            'password' => '12345678'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '0014567896',
            'Fname' => 'อิก',
            'Lname' => 'ศอกชมพู',
            'Ssn' => '1102002741790',
            'departmentID' => '001',
            'age' => 15,
            'hire_date' => '2017-05-12',
            'tel' => '0826037444',
            'address' => '548 m.9 Japan',
            'gender' => 'male',
            'salary' => 100,
            'position' => 'Supervisor',
            'password' => '12345678'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '3004567898',
            'Fname' => 'โอปอ',
            'Lname' => 'ฝายหิน',
            'Ssn' => '1102002741789',
            'departmentID' => '300',
            'age' => 15,
            'hire_date' => '2017-06-11',
            'tel' => '0826037444',
            'address' => '548 m.9 Thai',
            'gender' => 'male',
            'salary' => 1000,
            'position' => 'Employee',
            'password' => '12345678'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '0014567899',
            'Fname' => 'บูม',
            'Lname' => 'ฝาแฝด',
            'Ssn' => '1102002741789',
            'departmentID' => '001',
            'age' => 15,
            'hire_date' => '2017-06-11',
            'tel' => '0826037444',
            'address' => '548 m.9 Philipin',
            'gender' => 'male',
            'salary' => 1000,
            'position' => 'Employee',
            'password' => '12345678'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '3004567890',
            'Fname' => 'ขนุน',
            'Lname' => 'เล่นไวโอลิน',
            'Ssn' => '1102002741780',
            'departmentID' => '300',
            'age' => 15,
            'hire_date' => '2017-06-11',
            'tel' => '0826037444',
            'address' => '548 m.9 Thai',
            'gender' => 'male',
            'salary' => 1000,
            'position' => 'Employee',
            'password' => '12345678'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '1004567890',
            'Fname' => 'สมย',
            'Lname' => 'แซ่เพ้ง',
            'Ssn' => '1182002741780',
            'departmentID' => '100',
            'age' => 15,
            'hire_date' => '2017-06-11',
            'tel' => '0826037444',
            'address' => '548 m.9 Thai',
            'gender' => 'female',
            'salary' => 1000,
            'position' => 'Supervisor',
            'password' => '12345678'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '1004567891',
            'Fname' => 'สมุย',
            'Lname' => 'แซ่พ้งเพ้ง',
            'Ssn' => '1192002741780',
            'departmentID' => '100',
            'age' => 15,
            'hire_date' => '2017-06-11',
            'tel' => '0826037444',
            'address' => '548 m.9 Thai',
            'gender' => 'female',
            'salary' => 1000,
            'position' => 'Employee',
            'password' => '12345678'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '2007789556',
            'Fname' => 'แอ่ว',
            'Lname' => 'เชียงใหม่',
            'Ssn' => '2292007741660',
            'departmentID' => '200',
            'age' => 15,
            'hire_date' => '2017-06-11',
            'tel' => '0826037444',
            'address' => '548 m.9 Thai',
            'gender' => 'male',
            'salary' => 10000,
            'position' => 'Employee',
            'password' => '12345678'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '3001524788',
            'Fname' => 'แชมป์จ้า',
            'Lname' => 'พาเพลินนายานา',
            'Ssn' => '4092002741780',
            'departmentID' => '300',
            'age' => 15,
            'hire_date' => '2017-06-11',
            'tel' => '0826037444',
            'address' => '548 m.9 Thai',
            'gender' => 'male',
            'salary' => 10000,
            'position' => 'Employee',
            'password' => '12345678'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '1009963889',
            'Fname' => 'แขมป์',
            'Lname' => 'ชัยชนะ',
            'Ssn' => '7892002741780',
            'departmentID' => '100',
            'age' => 15,
            'hire_date' => '2017-06-11',
            'tel' => '0826037444',
            'address' => '548 m.9 Thai',
            'gender' => 'male',
            'salary' => 10000,
            'position' => 'Employee',
            'password' => '12345678'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '2003698528',
            'Fname' => 'เจษฏา',
            'Lname' => 'จองจิตวิมล',
            'Ssn' => '3392002741780',
            'departmentID' => '200',
            'age' => 15,
            'hire_date' => '2017-06-11',
            'tel' => '0826037444',
            'address' => '548 m.9 Thai',
            'gender' => 'male',
            'salary' => 10000,
            'position' => 'Employee',
            'password' => '12345678'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '1002596314',
            'Fname' => 'ศรัทธา',
            'Lname' => 'จองจิตวิมล',
            'Ssn' => '2292002741990',
            'departmentID' => '100',
            'age' => 15,
            'hire_date' => '2017-06-11',
            'tel' => '0826037444',
            'address' => '548 m.9 Thai',
            'gender' => 'male',
            'salary' => 10000,
            'position' => 'Employee',
            'password' => '12345678'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '2001567894',
            'Fname' => 'ยูตะ',
            'Lname' => 'บุญประกอบ',
            'Ssn' => '2292003751780',
            'departmentID' => '200',
            'age' => 15,
            'hire_date' => '2017-06-11',
            'tel' => '0826037444',
            'address' => '548 m.9 Thai',
            'gender' => 'male',
            'salary' => 10000,
            'position' => 'Employee',
            'password' => '12345678'
        ]);
        DB::table('employees')->insert([
            'employeeID' => '3009999999',
            'Fname' => 'ดลพัฒน์',
            'Lname' => 'แซ่เพ้ง',
            'Ssn' => '1192002741780',
            'departmentID' => '300',
            'age' => 15,
            'hire_date' => '2017-06-11',
            'tel' => '0826037444',
            'address' => '548 m.9 Thai',
            'gender' => 'male',
            'salary' => 10000,
            'position' => 'Employee',
            'password' => '12345678'
        ]);

    }
}