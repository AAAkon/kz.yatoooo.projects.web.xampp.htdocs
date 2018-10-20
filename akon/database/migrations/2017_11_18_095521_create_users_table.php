<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->string('patronymic');
            $table->string('mother_name');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('gender');
            $table->string('phone_number', 14)->nullable();
            $table->date('date');
            $table->bigInteger('country_id')->nullable()->default(0);
            $table->bigInteger('region_id')->nullable()->default(0);
            $table->bigInteger('city_id')->nullable()->default(0);
            $table->bigInteger('school_id')->nullable()->default(0);
            $table->bigInteger('university_id')->nullable()->default(0);
            $table->string('right_user')->nullable()->default('unknown');
            $table->string('show_recipient')->nullable()->default('hide');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
