<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // table banner
        Schema::create('banner', function (Blueprint $table) {
           $table->increments('id');
           $table->string('nome');
           $table->string('image');
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
