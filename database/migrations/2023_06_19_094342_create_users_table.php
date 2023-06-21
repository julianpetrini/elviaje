<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                // Columnas de la tabla "users"
                $table->bigIncrements('id');
                $table->string('name');
                $table->string('email')->unique();
                // Otras columnas...
                $table->timestamps();
            });
        }
    }
    

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
