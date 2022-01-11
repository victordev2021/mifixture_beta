<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->integer('players');
            $table->integer('series');
            $table->integer('classified');
            $table->integer('matchesbygroup');
            $table->integer('matchesplayoff');
            $table->integer('final');
            $table->integer('equality');
            $table->integer('winner');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('tournament_id');

            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->foreign('tournament_id')->references('id')->on('tournaments')->onDelete('cascade');

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
        Schema::dropIfExists('settings');
    }
}
