<?php

use Illuminate\Database\Seeder;

class EquipmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipment')->insert([
            'equipmentID' => 'EQ001',
            'equipmentName' => 'เข็มเย็บ' ,
            'detail' => 'เข็มยาว',
            'total' => '10'
        ]);

        DB::table('equipment')->insert([
            'equipmentID' => 'EQ002',
            'equipmentName' => 'กรรไกร' ,
            'detail' => 'กรรไกรด้ามไม้ตัวเหล็ก',
            'total' => '5'   
        ]);
    
    }
}