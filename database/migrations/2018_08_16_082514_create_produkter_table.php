<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produkter', function (Blueprint $table) {
            $table->increments('id');
            $table->string('navn');
            $table->string('beskrivelse');
            $table->integer('pris');
            $table->unsignedInteger('ordre_linje_id');
            $table->foreign('ordre_linje_id')->references('id')->on('ordre_linjer');
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
        Schema::dropIfExists('produkter');
    }
}
