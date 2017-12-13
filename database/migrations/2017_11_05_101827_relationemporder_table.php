<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationemporderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emporders', function (Blueprint $table) {
            
            $table->string('employeeID',10);
            $table->string('OrderID',5);
            $table->timestamps();

            
            $table->primary(['employeeID', 'OrderID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emporders');
    }
}
