<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLokationerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokationer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adresse');
            $table->integer('postNr');
            $table->string('by');
            $table->unsignedInteger('person_id');
            $table->foreign('person_id')->references('id')->on('personer');
            $table->unsignedInteger('opgave_id');
            $table->foreign('opgave_id')->references('id')->on('opgaver');
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
        Schema::dropIfExists('lokationer');
    }
}
