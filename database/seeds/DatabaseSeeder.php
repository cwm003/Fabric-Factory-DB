<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('CustomerTableSeeder');
        $this->call('DepartmentTableSeeder');
        $this->call('EmployeeTableSeeder');
        $this->call('FactoryTableSeeder');
        $this->call('OrderClothTableSeeder');
        $this->call('OrderCutomerTableSeeder');
        $this->call('OrderCutTableSeeder');
        $this->call('OrderSewTableSeeder'); 
        $this->call('OrderofcustomerTableSeeder'); 
        $this->call('RelationemporderTableSeeder'); 
        $this->call('OrderclothofFactorSeeder'); 
    }
}
