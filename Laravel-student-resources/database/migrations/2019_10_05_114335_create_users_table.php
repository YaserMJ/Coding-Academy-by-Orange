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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
//            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
//            $table->string('gender');
//            $table->string('Address');

            $table->unsignedBigInteger('uni_id');
            $table->foreign('uni_id')->references('id')->on('universities');

            $table->unsignedBigInteger('major_id');
            $table->foreign('major_id')->references('id')->on('majors');
            $table->rememberToken();
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
