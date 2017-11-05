<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HistoryshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historyshipments', function (Blueprint $table) {
            $table->date('date');
            $table->string('employeeID',10);
            $table->string('OrderID',5);
            $table->integer('linetotal');
            $table->string('VehicleID',3);
           
            $table->primary('VehicleID');
            //$table->foreign('employeeID')->references('employeeID')->on('employee');
            //$table->foreign('OrderID')->references('OrderID')->on('ordercustomer');
            //$table->foreign('linetotal')->references('linetotal')->on('ordercustomer');
            //$table->foreign('VehicleID')->references('VehicleID')->on('vehicle');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historyshipments');
    }
}
