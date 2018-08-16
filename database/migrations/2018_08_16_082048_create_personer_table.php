<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('personer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('navn');
            $table->integer('telefonNr');
            $table->string('email');
            $table->unsignedInteger('lokation_id');
            $table->foreign('lokation_id')->references('id')->on('lokationer');
            $table->unsignedInteger('kunde_id');
            $table->foreign('kunde_id')->references('id')->on('kunder');
            $table->unsignedInteger('medarbejder_id');
            $table->foreign('medarbejder_id')->references('id')->on('medarbejdere');
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
        Schema::dropIfExists('personer');
    }
}
