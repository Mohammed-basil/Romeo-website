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
            $table->Increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('userID');
            $table->integer('category_id');
            $table->string('phonenum');
            $table->integer('country_id');
            $table->boolean('admin')->default(0);
            $table->integer('account_number')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('image');
            $table->integer('active')->default(0);
            $table->boolean('verified')->default(false);
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
