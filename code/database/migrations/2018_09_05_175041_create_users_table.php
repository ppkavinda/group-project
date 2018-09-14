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
<<<<<<< HEAD
           

           
          
            $table->string('email');
            $table->string('pwd');
            // $table -> string('cpwd');
            //$table->string('role');
=======
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('nic')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
>>>>>>> b3a5c5fbb28041088bab468f7c1c4ee9f29bf6b1
            $table->rememberToken();
            $table->integer('role')->default(4);
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
