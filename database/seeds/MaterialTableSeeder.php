<?php

use Illuminate\Database\Seeder;

class MaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materials')->insert([
            'name_material' => 'ตะขอ',
            'materialID' => 'MT001' ,
            'number_material' => 5,
            'detail' => 'ถุงละ1000ชิ้น'
        ]);

        DB::table('materials')->insert([
            'name_material' => 'กระดุมสีขาวธรรมดา' ,
            'materialID' => 'MT002' ,
            'number_material' => 2,
            'detail' => 'ถุงละ130เม็ด'
        ]);
    }   
    
}