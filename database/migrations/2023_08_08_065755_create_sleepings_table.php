<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSleepingsTable extends Migration
{
    public function up()
    {
        Schema::create('sleepings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->date('check_in');
            $table->date('check_out');
            $table->integer('stars');
            $table->text('description')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sleepings');
    }
}

