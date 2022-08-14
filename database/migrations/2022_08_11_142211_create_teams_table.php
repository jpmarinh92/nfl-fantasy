<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    public function up()
    {
        Schema::create('teams', function(Blueprint $table) {
          $table->bigIncrements('id')->unsigned();
          $table->string('name')->unique();
          $table->string('location');
          $table->string('stadium');
          $table->string('logo')->nullable();

        });
    }
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
