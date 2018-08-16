<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedarbejdereTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medarbejdere', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lønsats');
            $table->string('type');
            $table->unsignedInteger('opgave_id');
            $table->foreign('opgave_id')->references('id')->on('opgaver');
            $table->unsignedInteger('person_id');
            $table->foreign('person_id')->references('id')->on('personer');
            $table->unsignedInteger('speciel_værktøj_id');
            $table->foreign('speciel_værktøj_id')->references('id')->on('speciel_værktøjer');
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
        Schema::dropIfExists('medarbejdere');
    }
}
