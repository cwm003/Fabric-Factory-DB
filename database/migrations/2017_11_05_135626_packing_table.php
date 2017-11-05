<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PackingTable extends Migration
{
    public function up()
    {
        Schema::create('packing', function (Blueprint $table) {
            $table->string('OrderID',3);
            $table->integer('linetotal');
            $table->integer('No_pack');

            $table->primary('OrderID');
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
        Schema::dropIfExists('packing');
    }
}
