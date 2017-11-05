<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MachineRepairTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machinerepair', function (Blueprint $table) {
            $table->string('machineID',5);
            $table->string('machineName',50);
            $table->Date('DateRepair');
            $table->integer('ExpenseRepair');
            
            $table->primary('machineID');
            //$table->foreign('machineID')->references('machineID')->on('machine');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('machinerepair');
    }
}
