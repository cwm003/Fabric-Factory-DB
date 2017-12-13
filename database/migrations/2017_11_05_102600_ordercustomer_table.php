<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdercustomerTable extends Migration
{
   /**
     * Run the migrations. เพิ่มaddress of customer ,type cloth
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordercustomers', function (Blueprint $table) { 
            $table->string('Fname',50);
            $table->string('idcustomer',3);
            $table->string('Address',255); //add
            $table->string('Tel',10); //ย้ายขึ้นมา
            $table->string('OrderID',5);
            $table->string('Detail',255);
            $table->string('typeproduct',32); //ย้ายขึ้นมา
            $table->string('type_cloth',5);  //add ย้ายขึ้นมา
            $table->string('color_cloth',3);//ย้ายขึ้นมา
            $table->string('size',10);//ย้ายขึ้นมา s,m,l
            
            $table->integer('Total');
            $table->integer('Price');
            $table->integer('linetotal');
            $table->date('startdate');
            $table->date('dateship');
            $table->string('employeeID_recv',10);
            
            
                     
            $table->primary(['OrderID']);
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
        Schema::dropIfExists('ordercustomers');
    }
}
