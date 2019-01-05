<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('size(6)')->nullable();
            $table->integer('reserved(6)')->nullable();
            $table->integer('size(7)')->nullable();
            $table->integer('reserved(7)')->nullable();
            $table->integer('size(8)')->nullable();
            $table->integer('reserved(8)')->nullable();
            $table->integer('size(9)')->nullable();
            $table->integer('reserved(9)')->nullable();
            $table->integer('size(10)')->nullable();
            $table->integer('reserved(10)')->nullable();
            $table->integer('size(11)')->nullable();
            $table->integer('reserved(11)')->nullable();
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
        Schema::dropIfExists('shoes');
    }
}
