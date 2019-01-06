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
            $table->integer('reservedsize(6)')->default(0);
            $table->integer('size(7)')->nullable();
            $table->integer('reservedsize(7)')->default(0);
            $table->integer('size(8)')->nullable();
            $table->integer('reservedsize(8)')->default(0);
            $table->integer('size(9)')->nullable();
            $table->integer('reservedsize(9)')->default(0);
            $table->integer('size(10)')->nullable();
            $table->integer('reservedsize(10)')->default(0);
            $table->integer('size(11)')->nullable();
            $table->integer('reservedsize(11)')->default(0);
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
