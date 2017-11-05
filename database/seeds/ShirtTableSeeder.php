<?php

use Illuminate\Database\Seeder;

class ShirtTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shirt')->insert([
            'patternID' => 'P11',
            'styleShirt' => '00001',
            'size' => 'S,M,L,XL'
        ]);
    }
}