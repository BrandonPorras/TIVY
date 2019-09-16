<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tivies', function (Blueprint $table) {
            $table->bigIncrements('id');
           
            $table->text('tittle');
            $table->text('description');
            $table->date('date');
            $table->time('startTime');
            $table->time('duration');
            $table->string('img');
            $table->Integer('state')->nullable()->default(0);            
            $table->string('place');
            $table->Integer('capacity');
                      
            $table->bigInteger('user_id')->unsigned();

            $table
            ->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

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
        Schema::dropIfExists('tivies');
    }
}
