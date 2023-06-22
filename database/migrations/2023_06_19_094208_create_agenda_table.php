<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaTable extends Migration
{
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('categoria');
            $table->date('fecha');
            $table->time('hora_inicio');
            $table->time('hora_fin')->nullable();
            $table->string('imagen')->nullable();
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('agenda');
    }
};

