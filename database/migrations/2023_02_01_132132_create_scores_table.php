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
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('id_students');
            $table->foreign('id_students')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->string('academicYear')->default('2023');
            $table->integer('course');
            $table->string('subject');
            $table->integer('quarter');
            $table->integer('mark1');
            $table->integer('mark2');
            $table->integer('mark3');
            $table->integer('average');

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
        Schema::dropIfExists('scores');
    }
};
