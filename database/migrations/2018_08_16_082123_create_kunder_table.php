<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKunderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('kunder', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('opgave_id');
            $table->foreign('opgave_id')->references('id')->on('opgaver');
            $table->unsignedInteger('person_id');
            $table->foreign('person_id')->references('id')->on('personer');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('kunder');
    }
}
