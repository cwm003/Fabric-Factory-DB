<?php

use Illuminate\Database\Seeder;

class PackingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packing')->insert([
            'OrderID' => 'P11',
            'linetotal' => 1000,
            'No_pack' => 1234
        ]);
    }
}