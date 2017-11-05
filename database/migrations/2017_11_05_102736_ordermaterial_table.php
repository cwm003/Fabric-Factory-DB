<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdermaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordermaterial', function (Blueprint $table) {       
            $table->string('detail',255);
            $table->string('NameMaterial',100);
            $table->string('materialID',5);
            $table->integer('NumberMaterial');
                
            $table->primary('materialID');
            //$table->foreign('NameMaterial')->references('name_material')->on('material');
            //$table->foreign('MaterialID')->references('MaterialID')->on('material');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordermaterial');
    }
}
