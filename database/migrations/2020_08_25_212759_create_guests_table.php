<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->bigIncrements('guest_id');
            $table->bigInteger('hotel_id')->unsigned()->nullable();
            $table->string('guest_firstname',200)->nullable();
            $table->string('guest_lastname',200)->nullable();
            $table->string('guest_tel_number',200)->nullable();
            $table->string('guest_add_str',200)->nullable();
            $table->string('guest_add_hno',200)->nullable();
            $table->string('guest_add_extra',200)->nullable();
            $table->string('guest_add_pin',200)->nullable();
            $table->string('guest_add_city',200)->nullable();
            $table->date('guest_visit_date')->nullable();
            $table->time('guest_visit_time')->nullable();
            $table->string('guest_total',200)->nullable();
            $table->string('table_number',200)->nullable();
            $table->tinyInteger('is_privacy_accepted')->default(1);
            $table->foreign('hotel_id')->references('id')->on('users');
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
        Schema::dropIfExists('guests');
    }
}
