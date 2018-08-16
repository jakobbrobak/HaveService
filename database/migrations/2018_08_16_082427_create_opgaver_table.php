<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpgaverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('opgaver', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('opgaveNr');
            $table->string('navn');
            $table->string('beskrivelse');
            $table->string('startTid');
            $table->string('slutTid');
            $table->string('status');
            $table->unsignedInteger('kunde_id');
            $table->foreign('kunde_id')->references('id')->on('kunder');
            $table->unsignedInteger('medarbejder_id');
            $table->foreign('medarbejder_id')->references('id')->on('medarbejdere');
            $table->unsignedInteger('speciel_værktøj_id');
            $table->foreign('speciel_værktøj_id')->references('id')->on('speciel_værktøjer');
            $table->unsignedInteger('lokation_id');
            $table->foreign('lokation_id')->references('id')->on('lokationer');
            $table->unsignedInteger('ordre_linje_id');
            $table->foreign('ordre_linje_id')->references('id')->on('ordre_linjer');
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
        Schema::dropIfExists('opgaver');
    }
}
