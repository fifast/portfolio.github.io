<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id('emp_id');
            $table->integer('emp_salary');
            $table->string('emp_name');
            $table->integer('emp_phone_no');
            $table->string('emp_address');
            $table->string('emp_email');
            $table->string('emp_grade');
            $table->string('emp_occupation');
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
        Schema::dropIfExists('employes');
    }
};
