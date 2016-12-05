<?php

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
            $table->integer('store_id');
            $table->string('name', 64);
            $table->string('email', 64);
            $table->string('password', 128);
            $table->string('mobile_no', 32);
            $table->string('avatar', 32)->default('avatar.gif');
            $table->string('address', 128)->nullable();
            $table->string('state', 32);
            $table->string('country', 16);
            $table->string('pin', 16)->nullable();
            $table->string('level', 16);
            $table->string('job_profile');
            $table->string('remember_token', 128)->nullable();
            $table->integer('created_by');
            $table->integer('updated_by')->nullable();
            $table->timestamps();
            $table->string('status', 16)->default('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
