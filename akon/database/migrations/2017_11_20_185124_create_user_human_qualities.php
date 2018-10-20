<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserHumanQualities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_human_qualities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('human_quality_id');
            $table->bigInteger('sum')->default(0);
            $table->bigInteger('count')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
