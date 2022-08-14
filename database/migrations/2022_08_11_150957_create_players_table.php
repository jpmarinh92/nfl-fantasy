<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{

    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('image')->nullable();
            $table->integer("number")->nullable();
            $table->string('position');
            $table->integer("age");
            $table->string("college");
            $table->integer('salary');
            $table->string('team_name')->nullable();
        });

        Schema::table('players', function($table) {
          $table->foreign('team_name')->references('name')->on('teams')->onDelete('set null')->onUpdate('cascade');
      });
    }

    public function down()
    {
        Schema::dropIfExists('players');
    }
}
