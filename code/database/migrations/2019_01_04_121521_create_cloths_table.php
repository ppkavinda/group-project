<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClothsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cloths', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('size(XS)')->nullable();
            $table->integer('reserved(XS)')->nullable();
            $table->integer('size(S)')->nullable();
            $table->integer('reserved(S)')->nullable();
            $table->integer('size(M)')->nullable();
            $table->integer('reserved(M)')->nullable();
            $table->integer('size(L)')->nullable();
            $table->integer('reserved(L)')->nullable();
            $table->integer('size(XL)')->nullable();
            $table->integer('reserved(XL)')->nullable();
            $table->integer('size(XXL)')->nullable();
            $table->integer('reserved(XXL)')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cloths');
    }
}
