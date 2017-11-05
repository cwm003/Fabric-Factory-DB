<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdercutTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordercut', function (Blueprint $table) {        
            $table->string('orderID',5);
            $table->string('patternID',3);
            $table->string('typeCloth',2);
            $table->integer('OrderCutID');          
            $table->integer('numBack');
            $table->integer('numFront');
            $table->integer('numSleeve');
            $table->string('ColorID');
            $table->integer('total');
            $table->integer('current_complete');
            $table->string('detailscreen',255);
           
            $table->primary(['OrderCutID']);
            //$table->foreign('OrderID')->references('OrderID')->on('ordercustomer');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordercut');
    }
}
