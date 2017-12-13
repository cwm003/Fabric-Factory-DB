<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderclothoffactoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderclothoffactors', function (Blueprint $table) {
            
            
            $table->string('factory_id',4);
            $table->string('OrderID',5);
            
            $table->primary(['OrderID', 'factory_id']);
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
        Schema::dropIfExists('orderclothoffactors');
    }
}
