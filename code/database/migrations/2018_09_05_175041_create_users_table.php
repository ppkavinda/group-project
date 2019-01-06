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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('nic')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
<<<<<<< HEAD
            $table->string('telephone')->nullable();
||||||| merged common ancestors
            $table->string('contact')->nullable();
=======
            $table->integer('telephone')->nullable();
>>>>>>> 8708affabc777cac330de464fb238ad18cdbe202
            $table->text('address1')->nullable();
            $table->text('address2')->nullable();
            $table->string('city')->nullable();
            $table->integer('postal_code')->nullable();
            $table->text('description')->nullable();
            $table->string('profile_pic')->default('/dist/img/avatar5.png');
            $table->string('courses')->nullable();
            $table->string('days')->nullable();
            $table->string('experience')->nullable();
            $table->string('education')->nullable();
            $table->string('api_token', 60)->unique();
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
