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
        $this->call('EquipmentTableSeeder');
        $this->call('FactoryTableSeeder');
        $this->call('HistoryShipTableSeeder');
        $this->call('HistoryTableSeeder');
        $this->call('MachineRepairTableSeeder');
        $this->call('MachineTableSeeder');
        $this->call('MaterialTableSeeder');
        $this->call('OrderClothTableSeeder');
        $this->call('OrderCutomerTableSeeder');
        $this->call('OrderCutTableSeeder');
        $this->call('OrderMaterialTableSeeder');
        $this->call('OrderSewTableSeeder');
        $this->call('PackingTableSeeder');
        $this->call('ShirtTableSeeder');  
        $this->call('VehicleTableSeeder'); 
    }
}
