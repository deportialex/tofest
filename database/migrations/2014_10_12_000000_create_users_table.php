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
            $table->string('usr_name');
            $table->string('usr_last_name');
            $table->unsignedInteger('usr_tel');
            $table->string('usr_email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('usr_password');
            //$table->rememberToken();//encripta cookies
            //$table->timestamps();


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
