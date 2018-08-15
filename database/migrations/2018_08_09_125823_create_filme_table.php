<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // tabela filme
        Schema::create('filme', function (Blueprint $table) {
           $table->increments('id');
           $table->string('nome');
           $table->string('categoria');
           $table->string('image');
           $table->string('link');
           $table->timestamps();
           $table->engine = 'InnoDB';
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
