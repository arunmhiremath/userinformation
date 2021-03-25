<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('comp_name')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('tel_number',200)->nullable();
            $table->string('add_str',200)->nullable();
            $table->string('add_hno',200)->nullable();
            $table->string('add_extra',200)->nullable();
            $table->string('add_pin',200)->nullable();
            $table->string('add_city',200)->nullable();
            $table->tinyInteger('is_privacy_accepted')->default('0');
            $table->tinyInteger('is_premium')->default('0');
            $table->date('premium_exp_date')->nullable();
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
