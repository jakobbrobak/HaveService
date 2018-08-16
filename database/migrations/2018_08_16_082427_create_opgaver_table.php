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
        Schema::create('opgaver', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('opgaveNr');
            $table->string('navn');
            $table->string('beskrivelse');
            $table->string('startTid');
            $table->string('slutTid');
            $table->string('status');
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
        Schema::dropIfExists('opgaver');
    }
}
