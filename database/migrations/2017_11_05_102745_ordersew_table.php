<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdersewTable extends Migration
{
   /**
     * Run the migrations. ลบ total
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordersews', function (Blueprint $table) {
            $table->string('OrderSewID',5);//ย้าย
            $table->string('OrderID',5);            
            $table->string('EmployeeSewID',10);
            $table->date('StartDate');
            $table->date('EndDate');
            $table->integer('Total');
            $table->integer('status');
           
            $table->primary('orderSewID');
            $table->timestamps();
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
