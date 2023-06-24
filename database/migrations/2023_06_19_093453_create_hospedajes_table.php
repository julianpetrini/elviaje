<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospedajesTable extends Migration
{
    public function up()
    {
        Schema::create('hospedajes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('ubicacion');
            $table->date('check_in');
            $table->date('check_out');
            $table->integer('stars');
            $table->text('descripcion')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hospedajes');
    }
}
