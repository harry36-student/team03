<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id')->unsigned()->nullable(false);
            $table->string('name');
            $table->string('number');
            $table->string('location');
            $table->string('habit');
            $table->double('height')->unsigned(true);
            $table->double('weight')->unsigned(true);
            $table->string('nation');
            $table->string('rank');
            $table->foreignId('teamid')->unsigned();
            $table->foreign('teamid')->references('teamid')->on('teams')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('players');
    }
}
