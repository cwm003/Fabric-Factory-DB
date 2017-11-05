<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->string('name_material',50);
            $table->string('materialID',5);
            $table->integer('number_material');
            $table->string('detail',255);
           
            $table->primary('materialID');
            //$table->foreign('materialID')->references('EQMTMC_ID')->on('historyequipmentmaterialmachine');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
