<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');   
            $table->string('lastname');            
            $table->string('email')->unique();           
            $table->string('password')->nullable();
            $table->longText('description')->nullable();
            $table->string('imagen')->default('img/default.jpg');
            $table->date('fecha')->nullable();
            //codigo para identificar al usuario se utiliza en la confirmación
            $table->string('codigo')->nullable();
            //se utiliza para saber si el usuario esta activo o no 
            //0 para activo 1 para inactivo
            $table->integer('activo')->default(0);
            $table->integer('state')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
