<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('nation', 250);
            $table->string('full_name', 250);
            $table->string('gender', 250);
            $table->string('working_place', 250);  
            $table->string('occupation', 250);
            $table->date('birthday');
            $table->string('image', 250);
            $table->text('add_information');
            $table->integer('priority');
            $table->integer('attach')->default(0);
            $table->date('created');
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
        Schema::dropIfExists('people');
    }
}
