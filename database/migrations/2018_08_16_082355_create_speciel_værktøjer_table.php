<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecielVærktøjerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('speciel_værktøjer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('navn');
            $table->string('beskrivelse');
            $table->unsignedInteger('opgave_id');
            $table->foreign('opgave_id')->references('id')->on('opgaver');
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
        Schema::dropIfExists('speciel_værktøjer');
    }
}
