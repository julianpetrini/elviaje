<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('hospedaje_id')->nullable();
            $table->unsignedBigInteger('agenda_id')->nullable();
            $table->text('content');
            $table->string('image')->nullable();
            $table->timestamps();

            $table->foreign('agenda_id')
                ->references('id')
                ->on('agenda')
                ->onDelete('cascade'); // Esto establece la relación y la eliminación en cascada
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
