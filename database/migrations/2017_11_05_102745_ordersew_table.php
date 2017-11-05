<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdersewTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordersews', function (Blueprint $table) {
            $table->string('OrderID',5);
            $table->string('OrderSewID',5);
            $table->string('PatternID',3);
            $table->string('PartSew',50);
            $table->string('EmployeeSewID',10);
            $table->date('EndDate');
            $table->date('StartDate');
            $table->integer('Total');
           
            $table->primary(['orderSewID']);
            //$table->foreign('OrderID')->references('OrderID')->on('ordercustomer');
            //$table->foreign('EmployeeSewID')->references('employeeID')->on('employee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordersews');
    }
}
