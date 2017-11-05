<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EquipmentTable extends Migration
{
    public function up()
    {
        Schema::create('equipment', function (Blueprint $table) {
        $table->string('equipmentID',5);
        $table->string('equipmentName',50);
        $table->string('detail',255);
        $table->integer('total');
        
        $table->primary(['equipmentID']);
        //$table->foreign('equipmentID')->references('EQMTMC_ID')->on('historyequipmentmaterialmachine');
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('equipment');
}
}
