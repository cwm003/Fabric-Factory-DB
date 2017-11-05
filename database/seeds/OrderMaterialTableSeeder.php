<?php

use Illuminate\Database\Seeder;

class OrderMaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ordermaterials')->insert([
            'NameMaterial'=> 'ตะขอ',
            'detail'=> 'ตะขอไม่ครบ' ,
            'materialID'=> 'MT001',
            'NumberMaterial'=> 100,
        ]);
        DB::table('ordermaterials')->insert([
            'NameMaterial'=> 'กระดุมสีขาวธรรมดา',
            'detail'=> 'กระดุมสีขาวธรรมดาขาด' ,
            'materialID'=> 'MT002',
            'NumberMaterial'=> 200
        ]);
        DB::table('ordermaterials')->insert([
            'NameMaterial'=> 'กระดุมสีขาวธรรมดา',
            'detail'=> 'กระดุมสีขาวธรรมดาขาด' ,
            'materialID'=> 'MT003',
            'NumberMaterial'=> 500
        ]);
    }
}
