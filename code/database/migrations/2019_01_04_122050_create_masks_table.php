<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('size(25*25)')->nullable();
            $table->integer('reserved(25*25)')->nullable();
            $table->integer('size(50*50)')->nullable();
            $table->integer('reserved(50*50)')->nullable();
            $table->integer('size(60*60)')->nullable();
            $table->integer('reserved(60*60)')->nullable();
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
        Schema::dropIfExists('masks');
    }
}
