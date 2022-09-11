<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('lname');
            $table->string('fname');
            $table->string('oname');
            $table->string('dob');
            $table->string('gender');
            $table->string('town');
            $table->string('lga');
            $table->string('state');
            $table->string('caddress');
            $table->string('paddress');
            $table->string('ptown');
            $table->string('plga');
            $table->string('pstate');
            $table->string('phone');
            $table->string('email');
            $table->string('course');
            $table->string('exname');
            $table->string('exnumber');
            $table->string('exyear');
            $table->string('sub1');
            $table->string('sub2');
            $table->string('sub3');
            $table->string('sub4');
            $table->string('sub5');
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
        Schema::dropIfExists('forms');
    }
}
