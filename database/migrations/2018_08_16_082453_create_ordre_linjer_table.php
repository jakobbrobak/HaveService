<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdreLinjerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('ordre_linjer', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('antal');
            $table->unsignedInteger('produkt_id');
            $table->foreign('produkt_id')->references('id')->on('produkter');
            $table->unsignedInteger('opgave_id');
            $table->foreign('opgave_id')->references('id')->on('opgaver');
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
        Schema::dropIfExists('ordre_linjer');
    }
}
