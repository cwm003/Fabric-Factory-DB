<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->string('employeeID', 10);
            $table->string('Fname',20);
            $table->string('Lname',20);
            $table->string('Ssn',13);
            $table->string('departmentID',3);
            $table->integer('age');
            $table->date('hire_date');
            $table->string('tel',10);
            $table->string('address',255);
            $table->string('gender',10);
            $table->integer('salary');
            $table->string('position',50);
            $table->string('password',50)->nullable();
            $table->primary(['employeeID','Ssn']);
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
        Schema::dropIfExists('employees');
    }
}
