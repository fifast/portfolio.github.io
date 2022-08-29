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
        Schema::create('basic_elements', function (Blueprint $table) {
            $table->id('basic_id');
            $table->string('basic_name');
            $table->string('basic_email');
            $table->string('basic_password');
            $table->string('basic_occupation');
            $table->integer('basic_phone_no');
            $table->string('basic_education');
            
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
        Schema::dropIfExists('basic_elements');
    }
};
