<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('size(100g)')->nullable();
            $table->integer('reserved(100g)')->nullable();
            $table->integer('size(200g)')->nullable();
            $table->integer('reserved(200g)')->nullable();
            $table->integer('size(400g)')->nullable();
            $table->integer('reserved(400g)')->nullable();
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
        Schema::dropIfExists('spices');
    }
}
