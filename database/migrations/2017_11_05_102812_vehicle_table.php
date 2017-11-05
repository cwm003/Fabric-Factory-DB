<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle', function (Blueprint $table) {
            $table->date('PurchaseDate');
            $table->string('color',20);
            $table->string('generation',20);
            $table->string('brand',20);
            $table->string('LicensePlate',7);
            $table->string('VehicleID',3);
            $table->string('employeeID',10);
            
            $table->primary('VehicleID');
            //$table->foreign('employeeID')->references('employeeID')->on('employee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle');
    }
}
