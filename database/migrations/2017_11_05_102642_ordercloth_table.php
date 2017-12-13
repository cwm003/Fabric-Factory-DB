<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderclothTable extends Migration
{
    /**
     * Run the migrations. ลบ namefac,tel,addr,account,cloth-id 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordercloths', function (Blueprint $table) {
            $table->string('order_clothid',5); //ย้าย
            $table->string('OrderID',5);//ย้าย
            $table->string('factory_id',4);
            $table->date('startorder');
            $table->string('type_cloth',5);
            $table->string('color_cloth',3); //add
            $table->integer('width_cloth');//ย้าย
            $table->float('weight_cloth',5,3);
            $table->integer('folding');//ย้าย
            $table->integer('unit_folding');//ย้าย

            $table->integer('Total');

            $table->integer('linetotal');//ย้าย
            $table->date('date_tranfer');
            $table->date('date_recv');
            $table->integer('status');
           
            $table->primary('order_clothid');
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
        Schema::dropIfExists('ordercloths');
    }
}
