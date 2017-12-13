<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdercutTable extends Migration
{
     /**
     * Run the migrations. ลบ total
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('ordercuts', function (Blueprint $table) {
            $table->string('OrderCutID',5);   //ย้าย       
            $table->string('orderID',5);
            //$table->string('factory_id',4); //ย้าย
            $table->string('typeCloth',2);        
            $table->string('ColorID');
            $table->string('Total');
            $table->string('EmployeeCutID',10);
            $table->date('StartDate');
            $table->date('EndDate');
            $table->integer('status');
            
            $table->primary('OrderCutID');
            
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
        Schema::dropIfExists('ordercuts');
    }
}
