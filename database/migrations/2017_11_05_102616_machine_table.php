<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MachineTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machines', function (Blueprint $table) {       
            $table->string('departmentID',3);
            $table->string('machineName',50);
            $table->string('machineID',5);
            $table->string('factoryID',5);
            $table->Date('purchase_date');
            
            $table->primary(['machineID']);
            //$table->foreign('departmentID')->references('departmentID')->on('department');
            //$table->foreign('factoryID')->references('factory_id')->on('factory');
            //$table->foreign('machineID')->references('EQMTMC_ID')->on('historyequipmentmaterialmachine');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('machines');
    }
}
