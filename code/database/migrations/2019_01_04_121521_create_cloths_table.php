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
            $table->integer('reservedsize(XS)')->default(0);
            $table->integer('size(S)')->nullable();
            $table->integer('reservedsize(S)')->default(0);
            $table->integer('size(M)')->nullable();
            $table->integer('reservedsize(M)')->default(0);
            $table->integer('size(L)')->nullable();
            $table->integer('reservedsize(L)')->default(0);
            $table->integer('size(XL)')->nullable();
            $table->integer('reservedsize(XL)')->default(0);
            $table->integer('size(XXL)')->nullable();
            $table->integer('reservedsize(XXL)')->default(0);
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
