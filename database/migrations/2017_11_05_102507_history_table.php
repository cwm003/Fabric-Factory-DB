<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HistoryTable extends Migration
{ /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
       Schema::create('historyequipmentmaterialmachines', function (Blueprint $table) {
           $table->string('order_EQMTMC_ID',5);
           $table->string('EQMTMC_ID',4);
           $table->date('date');
           $table->integer('total');
           $table->string('employee_order',10);
          
           //$table->primary('EQMTMC_ID');
       });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
       Schema::dropIfExists('historyequipmentmaterialmachines');
   }
}
